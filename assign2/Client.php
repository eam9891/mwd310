<?php
include "Scalars.php";
include "Scalars2.php";
include "Scalars3.php";

/**
 * Created by PhpStorm.
 * User: Ethan
 * Date: 1/31/2017
 * Time: 4:03 PM
 */
class Client {
    public function displayAll() {

        $br = "<br>";

        echo "<h3><u>Part 1</u></h3>";
        $display1 = new Scalars();
        $display1->showScalars();
        echo $br;
        echo $br;

        echo "<h3><u>Part 2</u></h3>";
        $display2 = new Scalars2();
        $display2->showScalars2();
        echo $br;
        echo $br;

        echo "<h3><u>Part 3</u></h3>";
        $display3 = new Scalars3();
        $display3->displayScalars3();

    }
}

$displayAll = new Client();
$displayAll->displayAll();
