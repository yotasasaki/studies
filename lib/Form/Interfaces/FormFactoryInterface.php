<?php

namespace lib\Form\Interfaces;

interface FormFactoryInterface
{
    public function createMainForm();

    public function createExtensionForm();
}
