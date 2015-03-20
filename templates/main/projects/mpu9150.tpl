<h1>{$project->getTitle()}</h1>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/1.jpg"/>
<h3>Installing Kernel Support (with Raspi-Config)</h3>
<p>
    Run <code>sudo raspi-config</code> and follow the prompts to install i2c support for the ARM core and linux kernel
</p>
<div>
    <img src="{$SITE_PATH}/img/projects/{$project->getId()}/1.png"/>
</div>
<div>
    <img src="{$SITE_PATH}/img/projects/{$project->getId()}/2.png"/>
</div>
<div>
    <img src="{$SITE_PATH}/img/projects/{$project->getId()}/3.png"/>
</div>
<div>
    <img src="{$SITE_PATH}/img/projects/{$project->getId()}/4.png"/>
</div>

<p>
    Then reboot!
</p>
<p>
    We also recommend going through the steps below to manually check everything was added by raspi-config!
</p>

<h3>Installing Kernel Support (Manually)</h3>
<p>
    If you are using Occidentalis, then your Pi is ready to go with I2C as far as enabling the hardware goes. However, if you are using Raspbian, you will need to open LXTerminal or console or ssh and enter the following command:
</p>
<code>
    sudo nano /etc/modules
</code>
<p>
    and add these two lines to the end of the file:
</p>
<code>
    i2c-bcm2708</br> 
    i2c-dev
</code>
<p>
    like so:
</p>
<div>
    <img src="{$SITE_PATH}/img/projects/{$project->getId()}/5.png"/>
</div>
<p>
    Then save the file</br> 
    Depending on your distribution, you may also have a file called /etc/modprobe.d/raspi-blacklist.conf</br>
    If you do not have this file then there is nothing to do, however, if you do have this file, you need to edit it and comment out the lines below:
</p>
<code>
    blacklist spi-bcm2708</br> 
    blacklist i2c-bcm2708
</code>
<p>
    .. by putting a # in front of them.
</p>
<code>
    sudo nano /etc/modprobe.d/raspi-blacklist.conf
</code>

<p>
    .. then edit the file so that it appears as below, and then save.
</p>
<div>
    <img src="{$SITE_PATH}/img/projects/{$project->getId()}/6.png"/>
</div>
<p>
    If you are running a recent Raspberry Pi (3.18 kernel or higher) you will also need to update the/boot/config.txt file. Edit it with sudo nano /boot/config.txt and add the text
</p>
<code>
    dtparam=i2c1=on</br> 
    dtparam=i2c_arm=on
</code>
<p>
    at the bottom. Note that the "1" in "i2c1" is a one not an L!
</p>
<div>
    <img src="{$SITE_PATH}/img/projects/{$project->getId()}/7.png"/>
</div>
<p>
    Once this is all done, reboot!
</p>
<h3>Install i2c-tools</h3>
<p>
    This is not required, but it's very handy for detecting devices and making sure everything works properly.
</p>
<code>
    sudo apt-get install python-smbus</br> 
    sudo apt-get install i2c-tools
</code>
<h3>Connecting the Gyroscope/Accelerometer to the Raspberry Pi.</h3>
<div>
    <img src="{$SITE_PATH}/img/projects/{$project->getId()}/8.png"/>
</div>
<p>
    The MPU-9150 has a AD0 pin, this allows you to set the last bit of the board's address, to either 0 (ground) or  1 (Vcc).  This allows us to connect two boards to the same bus.  In my case I just grounded this pin, then my board address is 0x68 
</p>
<h3>Verifying the communication</h3>
<p>
    Once we connect the board to the RPi, we can continue to check if we can actually see it as an I2C device.</br>
    Rastart PI
</p>
<p>
    Try running on your pi:  sudo i2cdetect -y 1  or sudo i2cdetect -y 0.  (0 for the 256 Pi model B). </br>
    You should be able to see your device on the table.  The following snapshot shows two I2C devices, one at address 40 and the second on address 70.
</p>
<div>
    <img src="{$SITE_PATH}/img/projects/{$project->getId()}/9.png"/>
</div>
<p>
    You should also see a couple of new entries under /dev:
</p>
<code>
    spidev0.0</br>
    spidev0.1</br>
    I2c-0</br>
    I2c-1</br>
</code>
<p>
    If don't see any of these entries, try running:
</p>
<code>
    sudo modprobe i2c-dev
</code>
<h3>Getting Gyroscope/Accelerometer data in JAVA</h3>
<p>
    You need to have <a href="{$SITE_PATH}/project/pi4j" target="_blank">PI4J library installed on your Raspberry PI</a></br>
    You will need <a href="{$SITE_PATH}/projects_data/{$project->getId()}/pi4j-core.jar" download>pi4j-core.jar</a> to add into the project libraries.
</p>
<pre>
<code>
public class Sensors {
    
    I2CBus bus;
    I2CDevice device;
    byte[] accelData, gyroData;
   
    public Sensors() {
        System.out.println("Starting sensors reading:");
        // get I2C bus instance
        try {
           //get i2c bus
           bus = I2CFactory.getInstance(I2CBus.BUS_1 /*or I2CBus.BUS_0 */);
           System.out.println("Connected to bus OK!");
            
           //get device itself
            device = bus.getDevice(0x68);
            //System.out.println("Connected to device OK!");

            //start sensing, using config registries 6B  and 6C    
            device.write(0x6B, (byte) 0b00000000);
            device.write(0x6C, (byte) 0b00000000);
            //System.out.println("Configuring Device OK!");

            //config gyro
            device.write(0x1B, (byte) 0b11100000);
            //config accel    
            device.write(0x1C, (byte) 0b00000001);
            // System.out.println("Configuring sensors OK!");
         
           startReading();

        } catch (IOException e) {
           System.out.println(e.getMessage());
        }
   }

 
    //Create a separate thread for reading the sensors
    public void startReading() {

        Task task = new Task<Void>() {
            @Override
            public void call() {
                try {
                    readingSensors();
                } catch (IOException e) {
                }
                return null;
            }
        };
        new Thread(task).start();
    }

    private void readingSensors() throws IOException {
        while (true) {
           accelData = new byte[6];
           gyroData = new byte[6];

           //You can read one registry at a time, 
           //or you can read multiple consecutive ones, 
           //in our case we are reading 6 consecutive registries
           //from 0x3B, meaning we are reading all the 
           //accelerometer measurements
           int r = device.read(0x3B, accelData, 0, 6);
           if (r != 6) {
             System.out.println("Error reading accel data, < 6 bytes");
           }
           //Convert the values to integers, using the
           //helper method asInt
           int accelX = ((int) (accelData[0] / 4));
            int accelY = ((int) (accelData[2] / 4));
            int accelZ = ((int) (accelData[4] / 4));
            double Ax = Math.atan(accelX / Math.sqrt(accelY * accelY + accelZ * accelZ)) * 180 / Math.PI;
            double Ay = Math.atan(accelY / Math.sqrt(accelX * accelX + accelZ * accelZ)) * 180 / Math.PI;
            double Az = Math.atan(accelZ / Math.sqrt(accelX * accelX + accelY * accelY)) * 180 / Math.PI;
            System.out.println("accelX: " + Ax + ", accelY: " + Ay + ", accelZ: " + Az);

         //Reading gyroscope measurements.
         r = device.read(0x43, gyroData, 0, 6);
         if (r != 6) {
           System.out.println("Error reading gyro data, < 6 bytes");
         }
         //Simillar calculation for gyroX, gyroY and  gyroY
         ...
       }
    }
}

</code>
</pre>

{include file="$TEMPLATE_DIR/main/paypal_donation.tpl"}