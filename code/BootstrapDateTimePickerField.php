<?php


class BootstrapDateTimePickerField extends TextField
{

    protected $columnWidth;

    protected $time = false;

    /**
     * Returns an input field, class="text" and type="text" with an optional maxlength
     *
     * @param $name
     * @param null $title
     * @param string $value
     * @param null $maxLength
     * @param null $form
     * @param null $columnWidth
     */
    public function __construct($name, $title = null, $value = '', $columnWidth = null, $maxLength = null, $form = null)
    {
        $this->maxLength = $maxLength;
        $this->columnWidth = $columnWidth;

        parent::__construct($name, $title, $value, $form);
    }

    public function Field($properties = array())
    {

        Requirements::javascript(BOOTSTRAP_FIELDS__DIR . "/js/BootstrapDateField.js");
        return parent::Field($properties);
    }

    //  protected $extraClasses = array('form-control', 'datetimepicker', 'field', 'text');

    public function extraClass()
    {
        $aClasses = array('field', 'form-control', parent::extraClass());
        $aClasses[] = $this->getFieldClassName();

        return implode(' ', $aClasses);
    }

    public function columnWidth()
    {
        return $this->columnWidth;
    }

    public function setTimeField($time)
    {
        $this->time = $time;

        return $this;
    }

    function getFieldClassName()
    {
        if ($this->time) {
            return "timepickerfield";
        }

        return "datepickerfield";
    }

    function getIcon()
    {
        return $this->getFieldClassName() === "timepickerfield" ? "time" : "calendar";
    }

    function RequiredAttributes()
    {
        if ($this->Required()) {
            return 'required="required" aria-required="true"';
        }
    }
    /**
     * @param boolean $bool
     */
    public function setIsTime($bool) {
        $this->time = $bool;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTime() {
        return $this->time;
    }

}
