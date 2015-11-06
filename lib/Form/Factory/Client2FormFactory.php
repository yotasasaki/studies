<?php
namespace lib\Form\Factory;

use lib\Form\Interfaces\FormFactoryInterface; 
use lib\Form\Form;
use lib\Form\FormHandler;
use lib\Form\Extension\Client2ExtensionFormHandler;

class Client2FormFactory implements FormFactoryInterface 
{
    public function createMainForm()
    {
        return new FormHandler(new Form);
    }

    public function createExtensionForm()
    {
        return new Client2ExtensionFormHandler();
    }
}
