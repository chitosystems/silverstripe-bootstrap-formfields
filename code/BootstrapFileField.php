<?php

/**
 * Description of BootstrapFielField
 *
 * @author Patrick Chitovoro
 * @copyright (c) 2014, Chito Systems
 */
class BootstrapFileField extends FileField
{

    protected $hasFileLoaded;
    protected $project;
    protected $field_name;
    protected $fieldId;

    public function __construct($name, $title = null, $project = null, $value = null)
    {
        $this->project = $project;
        $this->field_name = $name;
        if (isset($project)) {
            $fieldId = $name . 'ID';
            $this->hasFileLoaded = ($project->$fieldId != 0);
        }

        parent::__construct($name, $title, $value);
    }

    public function Field($properties = array())
    {
        return parent::Field($properties);
    }

    public function getFileLink()
    {
        $project = $this->project;
        $field = $this->getName();
        $fieldId = $field . 'ID';
        if ($project->$fieldId != 0) {
            return $project->$field()->URL;
        }
        return false;
    }

    public function hasFile()
    {
        return $this->hasFileLoaded;
    }

    public function Project()
    {
        if ($this->project) {
            return $this->project;
        }
        return false;
    }
}
