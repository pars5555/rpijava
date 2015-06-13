<?php

require_once (CLASSES_PATH . "/framework/AbstractManager.class.php");
require_once (CLASSES_PATH . "/dal/mappers/ProjectsMapper.class.php");

class ProjectsManager extends AbstractManager {

    /**
     * @var singleton instance of class
     */
    private static $instance = null;
    private $projects;

    /**
     * Initializes DB mappers
     *
     * @param object $config
     * @param object $args
     * @return
     */
    function __construct() {
        $this->initProjects();
    }

    private function initProjects() {
        $this->projects = array();
        $this->projects["dht"] = new ProjectDto("dht", "DHT (Humidity and Temperatur) sensor");
        $this->projects["hc-sr04"] = new ProjectDto("hc-sr04", "HC-SR04 Ultrasonic Range Sensor");
        $this->projects["adafruit-gps-breakout-66"] = new ProjectDto("adafruit-gps-breakout-66", "Adafruit Gps Breakout 66");
        $this->projects["sakis3g"] = new ProjectDto("sakis3g", "Connecting to 3g Internet (Sakis3g)");
        $this->projects["raspbian"] = new ProjectDto("raspbian", "Installing Raspbian on Raspberry PI (Windows)");
        $this->projects["mpu9150"] = new ProjectDto("mpu9150", "MPU-9150 Nine-Axis (Gyro + Accelerometer + Compass)");
        $this->projects["pi4j"] = new ProjectDto("pi4j", "Installing PI4J");
        $this->projects["netbeans"] = new ProjectDto("netbeans", "Running JAVA project remotely from Netbeans");
        $this->projects["hc-sr501"] = new ProjectDto("hc-sr501", "HC-SR501 Motion Sensor");
        $this->projects["l298n"] = new ProjectDto("l298n", "L298N Motor Driver Board");
    }

    /**
     * Returns an singleton instance of this class
     *
     * @param object $config
     * @param object $args
     * @return
     */
    public static function getInstance() {

        if (self::$instance == null) {
            self::$instance = new ProjectsManager();
        }
        return self::$instance;
    }

    public function getAllProjects() {
        return $this->projects;
    }

    public function getProject($id) {
        return $this->projects[$id];
    }

}

?>