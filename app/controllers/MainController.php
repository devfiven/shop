<?php


namespace app\controllers;

class MainController extends AppController
{
    public function indexAction()
    {
//        echo __METHOD__;
        $this->setMeta('Main page', 'Main site desc', 'website,shop,www ');

        $name = 'Jhon';
        $age = 333;
        $names = ['Andrey','Jane'];
        $this->set(compact('name','age','names'));
    }


}