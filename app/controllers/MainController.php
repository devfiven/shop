<?php


namespace app\controllers;

use ishop\Cache;

class MainController extends AppController
{
    public function indexAction()
    {
        $posts = \R::findAll('test');
        $this->setMeta('Main page', 'Main site desc', 'website,shop,www ');

        $name = 'Jhon';
        $age = 333;
        $names = ['Andrey', 'Jane','Mike'];
        $cache = Cache::instance();
        $data = $cache->get('test');
        if(!$data){
           $data = $cache->set('test',$names);
        }
        debug($data);
        $this->set(compact('name', 'age', 'names', 'posts'));
    }


}