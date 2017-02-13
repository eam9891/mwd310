<?php

/**
 * Created by PhpStorm.
 * User: Ethan
 * Date: 2/7/2017
 * Time: 10:23 AM
 */
class Part1 {
    public function returnRequest() {
        $this->displayVars();
    }
    public function displayVars() {
        echo $thisVar = "This is a string";
        echo "<br>";
        echo $ThisVar = 95;
        echo "<br>";
        echo $tHisVar = 105.50;
        echo "<br>";
        echo $thIsVar = true;
        echo "<br>";
        $thiSVar = array("Im","An","Array");
        foreach ($thiSVar as $value) {
            echo $value;
            echo "&nbsp";
        }
    }
}