<?php

class ProjectDto {

    private $id;
    private $title;

    function __construct($id, $title) {
        $this->id = $id;
        $this->title = $title;
    }

    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

}

?>