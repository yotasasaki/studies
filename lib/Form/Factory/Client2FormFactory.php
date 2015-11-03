<?php

require_once __DIR__ . "/../Interface/FormFactoryInterface.php";
require_once __DIR__ . "/../Form.php";
require_once __DIR__ . "/../FormHandler.php";
require_once __DIR__ . "/../Extension/Client2ExtensionFormHandler.php";

class Client2FormFactory implements FormFactoyInterface 
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
