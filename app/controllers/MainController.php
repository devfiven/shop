<?php


namespace app\controllers;

use ishop\Cache;

class MainController extends AppController
{
    public function indexAction()
    {
        $this->setMeta('Main page', 'Main site desc', 'website,shop,www ');
    }


}