<?php

/**
 * Created by PhpStorm.
 * User: Ethan
 * Date: 1/31/2017
 * Time: 3:12 PM
 */




class Scalars2 {

    public $prop1 = "First";
    public $prop2 = "Second";
    public $prop3 = "Third";
    public $prop4 = "Fourth";
    public $prop5 = "Fifth";

    public function showVars($set1, $set2, $set3, $set4, $set5) {
        $br = "<br>";
        echo $set1;
        echo $br;
        echo $set2;
        echo $br;
        echo $set3;
        echo $br;
        echo $set4;
        echo $br;
        echo $set5;
    }

    public function showScalars2() {
        $display = new Scalars2();
        $var1 = $this->prop1;
        $var2 = $this->prop2;
        $var3 = $this->prop3;
        $var4 = $this->prop4;
        $var5 = $this->prop5;
        $display->showVars($var1, $var2, $var3, $var4, $var5);
    }
}

