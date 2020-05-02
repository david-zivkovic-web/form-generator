<?php

namespace Davidzc\Formgen;

use Exception;

class EntityFormField
{
    public $name;
    public $type;
    public $elementType;
    public $view;
    public $information;
    public $example;
    
    const AVAILABLE_FIELDS = [
        'input.text',
    ];
    public function __construct($name = '', $type = '', $elementType = '', $example = false) {
        $this->setAttr('name',$name);
        $this->setAttr('type',$type);
        $this->setAttr('elementType',$elementType);
        if($type){
            $this->setAttr('view', strtolower($type). ($elementType ? '_' . strtolower($elementType) : ''));
        }
        $this->setAttr('example', $example);
        if($example){
            $this->setExampleInfo();
        }
    }
    
    public function setName($value)
    {
        $this->setAttr('name', $value);
        return $this;
    }
    public function setType($value)
    {
        $this->setAttr('type', $value);
        $this->setAttr('view', strtolower($value));
        return $this;
    }
    public function setElementType($value)
    {
        $this->setAttr('elementType', $value);
        $this->setAttr('view', $this->view . '_', strtolower($value));
        return $this;
    }
    
    protected function setAttr($attrName, $attrValue)
    {
        if(property_exists($this, $attrName)){
            $this->$attrName = $attrValue ?: null;
        } else {
            throw new Exception('Property doesnt exists');
        }
    }
    
    protected function setExampleInfo()
    {
        $exampleInfo =
            __('Creating/adding form field to form can be done in two ways. <br>') .
            __('1. Create form field with <b>$this->createFormField($name, $type, $elementType)</b> and<br>') . 
            __('add it to a form with <b>$form->addFormField($object of EntityFormField)</b><br>') .
            __('2. Directly added from <b>$form->addFormField($name, $type, $elementType)</b><br>') . 
            __('<b>In both ways all arguments are mandatory</b>')
        ;
        
        $this->information = $exampleInfo;
    }
    
    public static function generateExample($exapleFromAvailables)
    {
        $fieldArr = explode('.', $exapleFromAvailables);
        
        $type = $fieldArr[0];
        $elementType = $fieldArr[1];
        $name = 'example_' . $type . '_' . $elementType;
        
        return new self($name, $type, $elementType, true);
    }
}