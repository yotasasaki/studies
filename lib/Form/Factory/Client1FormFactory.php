<?php

require_once __DIR__ . "/../Interface/FormFactoryInterface.php";
require_once __DIR__ . "/../Form.php";
require_once __DIR__ . "/../FormHandler.php";
require_once __DIR__ . "/../Extension/Client1ExtensionFormHandler.php";

class Client1FormFactory implements FormFactoyInterface 
{
    public function createMainForm()
    {
        return new FormHandler(new Form);
    }

    public function createExtensionForm()
    {
        return new Client1ExtensionFormHandler();
    }
}
