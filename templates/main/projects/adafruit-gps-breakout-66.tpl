<h1>{$project->getTitle()}</h1>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/1.jpg"/>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/2.jpg"/>
<p>
    Satellites: 22 tracking, 66 searching</br>
    Patch Antenna Size: 15mm x 15mm x 4mm</br>
    Update rate: 1 to 10 Hz</br>
    Position Accuracy: < 3 meters (all GPS technology has about 3m accuracy)</br>
    Velocity Accuracy: 0.1 meters/s</br>
    Warm/cold start: 34 seconds</br>
    Acquisition sensitivity: -145 dBm</br>
    Tracking sensitivity: -165 dBm</br>
    Maximum Velocity: 515m/s</br>
    Vin range: 3.0-5.5VDC</br>
    MTK3339 Operating current: 25mA tracking, 20 mA current draw during navigation</br>
    Output: NMEA 0183, 9600 baud default</br>
    DGPS/WAAS/EGNOS supported</br>
    FCC E911 compliance and AGPS support (Offline mode : EPO valid up to 14 days )</br>
    Up to 210 PRN channels</br>
    Jammer detection and reduction</br>
    Multi-path detection and compensation
</p>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/wiring.jpg"/>
<p>
    The easiest way to get start is to use an inexpensive  USB to TTL adapter cable with your GPS module.</br>․
    This tutorial will assume that we are using the USB to TTL cable mentionned above, and that we are running on Rasbian.</br>
    Rasbian already has the drivers for PL2303-based cables pre-installed, so you just need to plug it in and it should show up as /dev/ttyUSB0).
</p>

<h3>Setting up the USB Adapter</h3>
<p>
    Once you plug the USB cable into the Pi, the adapter should show up as /dev/ttyUSB0 (though the '0' may be different if you have other ttyUSB adapters present).</br>
    You can see a list of all ttyUSB devices by entering the following into the console:
</p>
<code>
    ls /dev/ttyUSB*
</code>

<p>
    If you have any problems, you can enter the following command to see the USB devices on your Pi:
</p>

<code>
    sudo lsusb
</code>
<p>
    If you just want to do a quick check to see what data is coming out of the GPS, you can enter the following command, following by CTRL+C to quit:
</p>
<code>
    sudo cat /dev/ttyUSB0
</code>

<h3>Installing a GPS Daemon (gpsd)</h3>
<p>
    The next step is installing some software on your Raspberry Pi that understands the serial data that your GPS module is providing via /dev/ttyUSB0.</br>
    Thankfully other people have already done all the hard work for you of properly parsing the raw GPS data, and we can use (amongst other options) a nice little package named 'gpsd', which essentially acts as a layer between your applications and the actual GPS hardware, gracefully handling parsing errors, and providing a common, well-defined interfaces to any GPS module.
</p>
<p>
    To install gpsd, simply run the following commands from the console:
</p>
<code>
    sudo apt-get install gpsd gpsd-clients python-gps
</code>
<p>
    ... which will install the required packages (an internet connection will be required for this step!)
</p>
<code>
    sudo gpsd /dev/ttyUSB0 -F /var/run/gpsd.sock
</code>
<p>
    ... which will point the gps daemon to our GPS device on the USB to TTY adapter cable (simply substitute '/dev/ttyUSB0' for another destination if required).
</p>

<h3>Testing it Out</h3>
<p>
    After a few seconds, gpsd should open up the proper socket and if the GPS is locked we should be able to get some data from the GPS module.
</p>
<p>
    To test this, we can use the following command:
</p>
<code>
    cgps -s
</code>
<p>
    If you have a fix, you'll see something like the following information in the terminal window:
</p>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/cgps.jpg"/>
<p style="background-color: #cc4444;padding: 10px">
    If you have any problems and cgps always displays 'NO FIX' under status and then aborts after a few seconds, you may need to restart the gpsd service. You can do that via the following commands
</p>
<code>
    1.	sudo killall gpsd</br>
    2.	sudo gpsd /dev/ttyUSB0 -F /var/run/gpsd.sock
</code>
<h3>Getting GPS data in JAVA</h3>
<p>
    you will need gpsd4java java library</br>
    <a href="{$SITE_PATH}/projects_data/{$project->getId()}/gpsd4java-1.3.jar" download>json-simple-1.1.1.jar</a> 
</p>
{literal}
    <pre>
<code>
    public static void main(final String[] args) {
        try {
            String host = "localhost";
            int port = 2947;
            final GPSdEndpoint ep = new GPSdEndpoint(host, port, new ResultParser());

            ep.addListener(new ObjectListener() {

                @Override
                public void handleTPV(final TPVObject tpv) {
                    System.err.println(tpv);
                }

                @Override
                public void handleSKY(final SKYObject sky) {
                    for (final SATObject sat : sky.getSatellites()) {
                    }
                }

                @Override
                public void handleSUBFRAME(final SUBFRAMEObject subframe) {
                }

                @Override
                public void handleATT(final ATTObject att) {
                }

                @Override
                public void handleDevice(final DeviceObject device) {
                }

                @Override
                public void handleDevices(final DevicesObject devices) {
                    for (final DeviceObject d : devices.getDevices()) {
                    }
                }
            });

            ep.start();
            for (int i = 0; i < 30; i++) {
                Thread.sleep(1000);
                ep.watch(true, true);
            }
            Thread.sleep(1000);
        } catch (final Exception e) {
        }
    }
</code>
    </pre>
{/literal}


{include file="$TEMPLATE_DIR/main/paypal_donation.tpl"}
