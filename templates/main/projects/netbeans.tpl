<h1>{$project->getTitle()}</h1>
<h3>Requirements</h3>
<p>
    To complete this tutorial, you need the software and resources listed in the following table.
</p>
<code>
    NetBeans IDE version 8.0</br>
    Java Development Kit (JDK) version 7 or 8
</code>

<h3>Setting Up a Remote Platform in NetBeans IDE</h3>
<p>
    Once Oracle Java SE Embedded runtime is downloaded and installed on your Raspberry Pi, you need to set up NetBeans IDE with the remote platform as follows:
</p>
<code>
    activate the Java SE feature in NetBeans IDE</br>
    install a remote Java SE platform in NetBeans IDE. Note: The remote operating system must be UNIX. Windows is not supported.
</code>
<h3>To activate the Java SE feature in the IDE:</h3>
<p>
    1. Choose Tools > Plugins from the main IDE's toolbar.</br>
    2. In the Plugins dialog box, click the Installed tab and select Java SE in the list of available features.
</p>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/1.png"/>
<p>
    3. Click Activate.</br>
    4. At the Welcome panel of the Installer dialog box, click Activate.</br>
    5. When the activation is successfully completed, click Finish.</br>
    6. Click Close to close the Plugins dialog box.
</p>
<h3>To install a remote Java SE platform in NetBeans IDE:</h3>
<p>
    1. Choose Tools > Java Platforms.</br>
    &nbsp;&nbsp;&nbsp;&nbsp;The Java Platform Manager dialog box displays.
</p>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/2.png"/>
<p>
    2. Click Add Platform.</br>
    3. In the Select Platform Type of the Add Java Platform wizard, select Remote Java Standard Edition and click Next.</br>
    &nbsp;&nbsp;&nbsp;&nbsp;The IDE displays the Add Java Platform dialog box.
</p>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/3.png"/>
<p>
    4. Specify the remote platform details such as the name, the IP address or DNS name of the device, login, password, and the path to the JRE on the remote device.</br>
    &nbsp;&nbsp;&nbsp;&nbsp;Note: The target operating system must be UNIX (Windows is not supported).</br>
    5. Click Finish. The IDE validates the remote JRE by executing a probe and downloads the remote JRE system properties. </br>
    &nbsp;&nbsp;&nbsp;&nbsp;A new remote Java SE platform displays in the Java Platform Manager dialog box.
</p>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/4.png"/>
<p>
    Now your NetBeans IDE is set up for remote Java SE development.
</p>

<h3>Running a Project on a Remote Platfrom</h3>

<p>
    You can run and debug the application on a remote device after setting the project configuration to a configuration different from the default one.</br>
    To create a new configuration:
</p>
<p>
    1. Right-click the project name in the Projects window and select Properties from the context menu.</br>
    2. Choose the Run category.</br>
    3. Click New to the right of the Configuration drop-down list.</br>
    4. In the Create New Configuration dalog box, specify the name of a new configuration and click OK.</br>
    5. Select the runtime platform name in the Runtime Platform drop-down list.
</p>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/5.png"/>
<p>
    6. Click OK to save your edits.
</p>
<p>
    If you run the project on a remote platform (Run > Run Project (project name)), the output will look similar to what is shown in the figure below.
</p>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/6.png"/>

<h4>To switch between project configurations:</h4>
<p>
    Choose Run > Set Project Configuration > configuration name or right-click the project name and choose Set Configuration > configuration name from the context menu.
</p>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/7.png"/>


{include file="$TEMPLATE_DIR/main/paypal_donation.tpl"}

