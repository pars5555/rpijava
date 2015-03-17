<?php

require_once (CLASSES_PATH . "/loads/main/BaseGuestLoad.class.php");

/**
 *
 * @author Vahagn Sookiasian
 *
 */
class ProjectLoad extends BaseGuestLoad {

    private $projectId;

    public function load() {
        $this->projectId = $this->args[0];
    }

    public function getTemplate() {
        return TEMPLATES_DIR . "/main/projects/" . $this->projectId . ".tpl";
    }

}

?>