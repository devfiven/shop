<?php


namespace app\controllers;

use ishop\Cache;

class MainController extends AppController
{
    public function indexAction()
    {
        $brands = \R::find('brand', 'LIMIT 3');
        $this->setMeta('Main page', 'Main site desc', 'website,shop,www ');
        $this->set(compact('brands'));
    }


}