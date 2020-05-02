<?php

namespace Davidzc\Formgen;

use Davidzc\Formgen\EntityForm;
use Davidzc\Formgen\EntityFormField;

trait FormableTrait {
    
    
    public function entityForm()
    {
        $form = $this->initializeForm();
        
        return $form;
    }
    
    protected function initializeForm()
    {
        return new EntityForm();
    }
    
    protected function createFormField($name = '', $type = '', $elementType = '')
    {
        return new EntityFormField($name, $type, $elementType);
    }
}

