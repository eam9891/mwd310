<?php

/**
 * Created by PhpStorm.
 * User: Ethan
 * Date: 2/7/2017
 * Time: 10:23 AM
 */
class Part3 {
    public $propertyOne;
    protected $propertyTwo;
    private $propertyThree;
    public function returnRequest() {
        $child = new Part3Child();
    }
    public function methodOne () {
        return $this->propertyOne = "I'm a public property in a public method.";
    }
    protected function methodTwo () {
        echo $this->methodOne();
        echo "<br>";
        echo $this->propertyTwo = "I'm a protected property in a protected function.";
        echo "<br>";
        echo $this->methodThree();
        echo "<br>";
    }
    private function methodThree () {
        return $this->propertyThree = "I'm a private property in a private function.";
    }

}