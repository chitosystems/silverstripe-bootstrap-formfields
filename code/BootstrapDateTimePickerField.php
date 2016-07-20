<?php

/**
 * Description of BootstrapDateTimePickerField
 *
 * @author Patrick Chitovoro
 * @copyright (c) 2015, Chito Systems
 */
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
        Requirements::javascript(BOOTSTRAP_FIELDS_BOWER_DIR . "/moment/min/moment.min.js");
        Requirements::javascript(DATETIMEPICKER_DIR . "/js/bootstrap-datetimepicker.min.js");
        Requirements::javascript(BOOTSTRAP_FIELDS__DIR . "/js/BootstrapDateField.js");
        Requirements::css(DATETIMEPICKER_DIR . "/css/bootstrap-datetimepicker.min.css");

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
            return "timepicker";
        }
        return "datepicker";
    }

}
