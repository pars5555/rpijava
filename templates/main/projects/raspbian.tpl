<h1>{$project->getTitle()}</h1>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/1.jpg"/>
<p>
    For installing Raspbian you will need at least 4gb SD card, a 
    <a href="http://downloads.raspberrypi.org/raspbian_latest" download>Raspbian raw image</a> and 
    <a href="{$SITE_PATH}/projects_data/{$project->getId()}/Win32DiskImager-0.9.5-install.zip">Win32DiskImager</a> (Windows).
</p>

<h3>Imaging the SD card</h3>
<code>
    1. Download and install <a href="{$SITE_PATH}/projects_data/{$project->getId()}/Win32DiskImager-0.9.5-install.zip">Win32DiskImager</a></br>
    2. Insert your SD card and open Win32DiskImager</br>
    3. Unzip the 201X-XX-XX-wheezy-raspbian.zip file (X is the date of your download)</br>
    4. Select the .IMG and select the correct device (!)</br>
    5. Now the SD card has the Raspbian Image
</code>

{include file="$TEMPLATE_DIR/main/paypal_donation.tpl"}

