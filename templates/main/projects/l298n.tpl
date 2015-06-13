<h1>{$project->getTitle()}</h1>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/l298n.jpg"/>
<p>
    Driver: L298N</br>
    Driver power supply: +5V~+46V</br>
    Driver Io: 2A</br>
    Logic power output Vss: +5~+7V (internal supply +5V)</br>
    Logic current: 0~36mA</br>
    Controlling level: Low -0.3V~1.5V, high: 2.3V~Vss</br>
    Enable signal level: Low -0.3V~1.5V, high: 2.3V~Vss</br>
    Max power: 25W (Temperature 75 cesus)</br>
    Working temperature: -25C~+130C</br>
    Dimension: 60mm*54mm</br>
    Driver weight: ~48g</br>
    Other extensions: current probe, controlling direction indicator, pull-up resistoer switch, logic part power supply.
</p>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/wiring.jpg"/>
<p>
    Connect the pins in the following way.</br>
    •	IN1 to GPIO PinX (Any GPIO Pin)</br>
    •	IN2 to GPIO PinY (Any GPIO Pin)</br>
    •	5v OUT to Raspberry PI 5v in</br>
    •	Ground to Raspberry PI Ground</br>
    •	+12v to Battery 12v</br>
    •	Ground to Battery Ground</br>
    •	OUT1 to Motor</br>
    •	OUT2 to Motor
</p>

<h3>Driving Motors with JAVA</h3>
<p>
    download 
    <a href="{$SITE_PATH}/projects_data/{$project->getId()}/l298n.zip" download>l298n.zip</a> </br>
    Project is written in Netbeans IDE and it is setup to run remotely on Raspberry PI, so you need to change the IP address in project properties.</br>
    Project has dependency to <a href="{$SITE_PATH}/project/pi4j" target="_blank">PI4J library</a> which is included in the project.</br>
    You will need <a href="{$SITE_PATH}/projects_data/{$project->getId()}/pi4j-core.jar" download>pi4j-core.jar</a> to add into the project libraries.
</p>

{include file="$TEMPLATE_DIR/main/paypal_donation.tpl"}