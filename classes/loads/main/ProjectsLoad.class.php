<?php

require_once (CLASSES_PATH . "/loads/main/BaseGuestLoad.class.php");
require_once (CLASSES_PATH . "/managers/ProjectsManager.class.php");

/**
 *
 * @author Vahagn Sookiasian
 *
 */
class ProjectsLoad extends BaseGuestLoad {

    public function load() {
        $projectsManager = ProjectsManager::getInstance();
        $allProjects = $projectsManager->getAllProjects();
        $this->addParam("projects", $allProjects);
    }

    public function getTemplate() {
        return TEMPLATES_DIR . "/main/projects.tpl";
    }

}

?>