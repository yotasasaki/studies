<?php

class BaseClass
{

    public function __construct()
    {
        spl_autoload_register(function($c) {
            $file =  __DIR__  . '/../../' .  strtr($c, '\\_', '//').'.php';
            #var_dump($c, $file); //for debag
            include_once $file;
        });
    }

    public function render($html)
    {
        echo $html;
    }
}
