<?php
/**
 *
 * @copyright (c) 2017 Insite Apps - http://www.insiteapps.co.za
 * @package insiteapps
 * @author Patrick Chitovoro  <patrick@insiteapps.co.za>
 * All rights reserved. No warranty, explicit or implicit, provided.
 *
 * NOTICE:  All information contained herein is, and remains the property of Insite Apps and its suppliers,  if any.
 * The intellectual and technical concepts contained herein are proprietary to Insite Apps and its suppliers and may be covered by South African. and Foreign Patents, patents in process, and are protected by trade secret or copyright laws.
 * Dissemination of this information or reproduction of this material is strictly forbidden unless prior written permission is obtained from Insite Apps.
 * Proprietary and confidential.
 * There is no freedom to use, share or change this file.
 *
 *
 */

class BootstrapNumericField extends NumericField
{

    protected $extraClasses = array('form-control');

    public function extraClasses()
    {
        $classes = array('field', 'form-control', parent::extraClasses());

        return implode(' ', $classes);
    }
    
    
    /**
     * {@inheritdoc}
     */
    public function getAttributes() {
        return array_merge(
            parent::getAttributes(),
            array(
                'type' => 'number',
            )
        );
    }
}
