<?php

require_once __DIR__ . "/BaseClass.php";
require_once __DIR__ . "/Factory/Client1FormFactory.php";
require_once __DIR__ . "/Factory/Client2FormFactory.php";

class FormApp extends BaseClass
{
    private $_client;

    public function __construct()
    {
        $this->_client = urlencode($_GET['client']);
    }

    public function run()
    {
        try {
            $factory = $this->_getFactory();

            $mainForm = $factory->createMainForm();
            $formHeaderData = $mainForm->getFormHeader('confirm.php', 'get');
            $this->render($formHeaderData);

            $mainFormData = $mainForm->getMainForm();
            $this->render($mainFormData);

            if ($this->_useExtension() === true) {
                $extensionForm = $factory->createExtensionForm();
                $extensionFormData = $extensionForm->getExtensionForm();

                $this->render($extensionFormData);
            }

            $formFooterData = $mainForm->getFormFooter();
            $this->render($formFooterData);

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    private function _getFactory()
    {   #todo Clientオブジェクトを作成する
        $client = $this->_getClientId();

        switch ($client) {
            case 1:
                $factory = new Client1FormFactory();
                break;
            case 2:
                $factory = new Client2FormFactory();
                break;
            default:
                throw new RuntimeException('Client not defined');
        }

        return $factory;
    }

    private function _getClientId()
    {
        return $this->_client;
    }

    private function _getClientIdAsInteger()
    {
        return (int)$this->_getClientId();
    }

    private function _useExtension()
    {
        $client = $this->_getClientIdAsInteger();

        switch ($client) {
            case 1:
                $use = true;
                break;
            case 2:
                $use = true;
                break;
            default:
                $use = false;
        }

        return $use;    
    }
}

