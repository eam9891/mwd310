<?php

/**
 * Created by PhpStorm.
 * User: Ethan
 * Date: 2/2/2017
 * Time: 5:03 PM
 * Create a method that adds 5 numbers and returns their average.
 */
class Part1 {
    public function addInts() {
        $int1 = 5;
        $int2 = 5;
        $int3 = 5;
        $int4 = 5;
        $int5 = 5;
        $intTotal = $int1 + $int2 + $int3 + $int4 + $int5;
        $intAverage = $intTotal / 5;
        return $intAverage;
    }
}