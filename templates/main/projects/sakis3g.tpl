<h1>{$project->getTitle()}</h1>
<img src="{$SITE_PATH}/img/projects/{$project->getId()}/1.jpg"/>

<h3>Installing the Library</h3>
<p>
    To install the Python library on either the Raspberry Pi you will first need a few dependencies. 
    Execute the following command to install these dependencies (assuming you're using Raspbian on the Pi):   
</p>
<code>
    1.	sudo apt-get update</br>
    2.	sudo apt-get install build-essential python-dev</br>
</code>


<h3>Downloading the Code</h3>
<p>
    download 
    <a href="{$SITE_PATH}/projects_data/{$project->getId()}/Python-DHT-lib.zip" download>Python-DHT-lib.zip</a> 
    (ex. "/home/pi"):
</p>
<code>
    1.	unzip Python-DHT-lib.zip</br>
    2.	cd Python-DHT-lib</br>
    3.	sudo python setup.py install</br>
</code>
<p>
    This should compile the code for the library and install it on your device so any Python program can access the Adafruit_DHT python module.
</p>


<h3>Testing</h3>
<p>
    To test the DHT sensor run following Python file to see the result:
</p>
<code>
    sudo python examples/DHTReader.py DHT_MODEL GPIO_PIN_NUMBER
</code>
<p>
    Where DHT_MODEL should be 11 (for DHT11) or 22 (for DHT22)</br>
    and GPIO_PIN_NUMBER is the GPIO pin number where you connected the sensor data pin
</p>


<h3>Getting sensor result in JAVA</h3>
<p>
    Now getting the sensor result in JAVA is easy using Python code above. So we just need to <code>exec</code> Python code above and read the output data.</br>
    you will need following java library to parse the JSON result</br>
    <a href="{$SITE_PATH}/projects_data/{$project->getId()}/json-simple-1.1.1.jar" download>json-simple-1.1.1.jar</a> 

</p>
{literal}
    <pre>
    <code>
        public static void main(String[] args) {
        try {
            int DHT_MODEL = 11;
            int GPIO_PIN_NUMBER = 4;
            Process p = Runtime.getRuntime().exec("python /home/pi/DHTReader.py "+DHT_MODEL+" "+GPIO_PIN_NUMBER);
            InputStream inputStream = p.getInputStream();
            InputStreamReader isr = new InputStreamReader(inputStream);
            BufferedReader br = new BufferedReader(isr);
            String jsonResult = br.readLine();
            System.err.println(jsonResult);
            JSONParser jp = new JSONParser();
            JSONObject parse = (JSONObject) jp.parse(jsonResult);
            String Humidity = (String) parse.get("Humidity");
            String Temp = (String) parse.get("Temp");
            System.err.println(Humidity + ";" + Temp);
        } catch (Exception ex) {
            
        }
    </code>
    </pre>
{/literal}

<p>
    That's all you need to get you DHT sensor resut in JAVA :)
</p>