<?php

/**
 * Created by PhpStorm.
 * User: Ethan
 * Date: 2/2/2017
 * Time: 5:04 PM
 */
class Part3 {
    public $array1 = array(
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4
    );
    public $array2 = array(
        "One" => 1,
        "Two" => 2,
        "Three" => 3,
        "Four" => 4
    );
    public $array3 = array();
    public $third;
    function joinArrays() {
        foreach ($this->array1 as $value) {
            $this->third += $value;
        }
        foreach ($this->array2 as $value) {
            $this->third += $value;
        }
        return $this->third;
    }
}