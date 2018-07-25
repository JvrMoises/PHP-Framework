<?php
require_once 'config/Config.php';
require_once 'helpers/url_helper.php';

//Autoload php
spl_autoload_register(function($className){
    require_once 'lib/' . $className . '.php';
});