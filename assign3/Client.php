<?php

/**
 * Created by PhpStorm.
 * User: Ethan
 * Date: 2/2/2017
 * Time: 4:56 PM
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
    public function __construct()
    {
        $part1=new Part1();
        echo $part1->addInts();

        $part2 = new Part2();
        echo $part2->checkWinner();

        $part3 = new Part3();
        echo $part3->joinArrays();
    }
}
$worker=new Client();
?>