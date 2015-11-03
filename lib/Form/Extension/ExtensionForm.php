<?php

class ExtensionForm
{

    private $_html;

    public function __construct($html)
    {
        $this->_html = $html;
    }

    public function getForm()
    {
        return $this->_html; 
    }
        
}
