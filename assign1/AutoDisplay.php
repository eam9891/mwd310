<?php

/*
 * Created by PhpStorm.
 * User: Ethan
 * Date: 1/31/2017
 * Time: 10:36 AM
 */

class AutoDisplay {

    // 1.) Constructor automatically puts my name on the screen.
    function __construct() {
        $myName="Ethan Morris";
        echo $myName;
        echo "<br>";
    }

    // 2.) Class with public property. Value is assigned outside class.
    public $publicProperty;

    // 3.) Public method that calls a private method which displays private property.
    private $privateProperty = "This is a private property";
    public function pubMethod() {
        $this->privMethod();
    }
    private function privMethod() {
        echo $this->privateProperty;
    }

}
// Create instance for step 1.
$test=new AutoDisplay();
// Assign publicProperty a value and display it.
echo $test->publicProperty = "This public property was assigned a value, and displayed, outside of the class.";
echo "<br>";
// Call public method, which calls private method, which displays private property.
$test->pubMethod();




