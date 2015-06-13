<h1>{$project->getTitle()}</h1>
<div>
    <img src="{$SITE_PATH}/img/projects/{$project->getId()}/1.jpg"/>
    <img src="{$SITE_PATH}/img/projects/{$project->getId()}/2.jpg"/>
</div>

<p>
    Voltage: 5V – 20V</br>
    Power Consumption: 65mA</br>
    TTL output: 3.3V, 0V</br>
    Delay time: adjustable (0.3 sec – 10 minutes)</br>
    Lock time: 0.2 sec</br>
    Trigger methods: L – disable repeat trigger, H enable repeat trigger</br>
    Sensing range: less than 120 degree, within 7 meters</br>
    Temperature: – 15 ~ +70</br>
    Dimension: 32*24 mm, distance between screw 28mm, M2, Lens dimension in diameter: 23mm
</p>
<div>
    <img src="{$SITE_PATH}/img/projects/{$project->getId()}/wiring.jpg"/>
</div>
<p>
    As see in picture above, it need to connect 3-5v vcc and Groud and ny GPIO pin you wish.</br>
    •	VCC to 5V</br>
    •	GND to GND.</br>
    •	Echo to Any GPIO PIN.</br>
</p>


<h3>Getting Motion in JAVA</h3>
<p>
    download 
    <a href="{$SITE_PATH}/projects_data/{$project->getId()}/hcsr501.zip" download>hcsr04.zip</a> </br>
    Project is written in Netbeans IDE and it is setup to run remotely on Raspberry PI, so you need to change the IP address in project properties.</br>
    Project has dependency to <a href="{$SITE_PATH}/project/pi4j" target="_blank">PI4J library</a> which is included in the project.</br>
    You will need <a href="{$SITE_PATH}/projects_data/{$project->getId()}/pi4j-core.jar" download>pi4j-core.jar</a> to add into the project libraries.
</p> 
<pre>
<code>
    public static void main(String[] args) {
        GpioPinDigitalInput inputPin = GpioControl.getInstance().getInputPin(6, PinPullResistance.PULL_DOWN);
        inputPin.addListener(new GpioPinListenerDigital() {
            @Override
            public void handleGpioPinDigitalStateChangeEvent(GpioPinDigitalStateChangeEvent event) {
                if (event.getState() == PinState.HIGH) {
                    System.err.println("Motion occured!");
                }
            }

        });
        new Thread(new  Runnable() {

            @Override
            public void run() {
                while(true){
                    try {
                        Thread.sleep(10000);
                    } catch (InterruptedException ex) {
                        Logger.getLogger(HCSR501.class.getName()).log(Level.SEVERE, null, ex);
                    }
                }
            }
        }).start();
    }
</code>
</pre>
{include file="$TEMPLATE_DIR/main/paypal_donation.tpl"}