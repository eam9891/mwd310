<?php

/**
 * Created by PhpStorm.
 * User: Ethan
 * Date: 2/7/2017
 * Time: 10:23 AM
 */
class Part2 {
    public function returnRequest() {
        $this->display();
    }
    public function display() {
        $myAge = 25;
        $date = 211;
        $return = $myAge + $date;
        $return *= 3;
        $return /= 4;
        $return += $date/3%$date;
        echo $return;
    }
}