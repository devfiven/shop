<?php


namespace ishop;


class Db
{

    use TSingletone;

    protect function __construct()
    {
      $db = require_once CONF . '/config_db.php';
    }

}