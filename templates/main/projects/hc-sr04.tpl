<h1>{$project->getTitle()}</h1>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/hc-sr04.jpg"/>
<p>
    Working Voltage DC 5 V</br>
    Working Current 15mA</br>
    Working Frequency 40Hz</br>
    Max Range 4m</br>
    Min Range 2cm</br>
    MeasuringAngle 15 degree</br>
    Trigger Input Signal 10uS TTL pulse</br>
    Echo Output Signal Input TTL lever signal and the range in proportion
    Dimension 45*20*15mm
</p>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/wiring.jpg"/>
<p>
    Connect the pins in the following way.</br>
    •	VCC to 5V</br>
    •	GND to GND.</br>
    •	Echo to Any GPIO PIN.</br>
    •	Trig to Any GPIO PIN.
</p>

<h3>Getting Distance in JAVA</h3>
<p>
    download 
    <a href="{$SITE_PATH}/projects_data/{$project->getId()}/hcsr04.zip" download>hcsr04.zip</a> </br>
    Project is written in Netbeans IDE and it is setup to run remotely on Raspberry PI, so you need to change the IP address in project properties.</br>
    Project has dependency to <a href="{$SITE_PATH}/project/pi4j" target="_blank">PI4J library</a> which is included in the project.</br>
    You will need <a href="{$SITE_PATH}/projects_data/{$project->getId()}/pi4j-core.jar" download>pi4j-core.jar</a> to add into the project libraries.
</p>

{include file="$TEMPLATE_DIR/main/paypal_donation.tpl"}