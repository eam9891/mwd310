<?php

/**
 * Created by PhpStorm.
 * User: Ethan
 * Date: 1/31/2017
 * Time: 2:55 PM
 */
class Scalars {

    public function showString() : string {
        return "This is a string";
    }
    public function showFloat() : float {
        return 3.15;
    }
    public function showInteger() : int {
        return 55;
    }
    public function showBoolean() : bool {
        return true;
    }
    public function showScalars() {
        $br = "<br>";
        $display = new Scalars();
        echo $display->showString();
        echo $br;
        echo $display->showFloat();
        echo $br;
        echo $display->showInteger();
        echo $br;
        echo $display->showBoolean();
    }
}



