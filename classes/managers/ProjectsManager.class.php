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