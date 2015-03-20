<h1>{$project->getTitle()}</h1>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/1.jpg"/>

<h3>Installing Libraries</h3>
<code>
    apt-get install ppp usb-modeswitch wvdial</br>
    apt-get install usb-modeswitch-data</br>
    apt-get install libusb-1.0.0
</code>

<h3>Installing Sakis3g</h3>
<p>
    download 
    <a href="{$SITE_PATH}/projects_data/{$project->getId()}/sakis3g.tar.gz" download>sakis3g.tar.gz</a> 
    (ex. "/home/pi"):
</p>
<code>
    sudo mkdir /usr/bin/modem3g</br>
    sudo chmod 777 /usr/bin/modem3g</br>
    sudo cp sakis3g.tar.gz /usr/bin/modem3g</br>
    cd /usr/bin/modem3g</br>
    sudo tar -zxvf sakis3g.tar.gz</br>
    sudo chmod +x sakis3g
</code>


<h3>Connecting to internet</h3>
<p>
    Connecting to internet with interactive user interface
</p>
<code>
    /usr/bin/modem3g/sakis3g --interactive "menu" "console"
</code>
<p>
    Connecting to internet in silent mode (without user interface)
</p>
<code>
    /usr/bin/modem3g/sakis3g connect APN=internet.beeline.am  APN_USER=internet APN_PASS=internet USBINTERFACE=0
</code>

{include file="$TEMPLATE_DIR/main/paypal_donation.tpl"}