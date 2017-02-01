<?php

/**
 * Created by PhpStorm.
 * User: Ethan
 * Date: 1/31/2017
 * Time: 4:02 PM
 */



class Scalars3 {
    public function firstMethod() : array {
        $numericArray = array("One", "Two", "Three", "Four", "Five");
        return $numericArray;
    }
    public function secondMethod() : array {
        $associativeArray = array(
            'Uno' => 'One',
            'Dos' => 'Two',
            'Tres' => 'Three',
            'Quatro' => 'Four',
            'Cinco' => 'Five'
        );
        return $associativeArray;
    }
    public function displayScalars3() {
        $br = "<br>";
        $display3 = new Scalars3();
        $arr1 = $display3->firstMethod();
        $arr2 = $display3->secondMethod();

        echo "<b>This is a numeric array</b><br>";
        foreach ($arr1 as $value) {
            echo $value;
            echo $br;
        }

        echo "<b>This is an associative array</b><br>";
        foreach ($arr2 as $value) {
            echo $value;
            echo $br;
        }
    }
}

