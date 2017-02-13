<?php

/**
 * Created by PhpStorm.
 * User: Ethan
 * Date: 2/7/2017
 * Time: 10:23 AM
 */

error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", 1);

// Autoload given function name.
function includeAll($className)
{
    include_once($className . '.php');
}
//Register
spl_autoload_register('includeAll');

Class Client
{
    public $br = "<br>";
    private $useClass, $callClass;

    public function __construct()
    {

        if (!empty($_GET['request'])) {
            $this->useClass = $_GET['request'];
        }
        if (!empty($_POST['request'])) {
            $this->useClass = $_POST['request'];
        }
        $this->callClass=new $this->useClass();
        echo $this->callClass->returnRequest();

    }
}
$worker=new Client();
?>