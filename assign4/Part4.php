<?php

/**
 * Created by PhpStorm.
 * User: Ethan
 * Date: 2/11/2017
 * Time: 10:12 PM
 *
 *
 */
class Part4 {
    private $get;
    private $post;
    private $helper;
    public function returnRequest() {


        if (!empty($_GET['request'])) {
            $this->get = $_GET['request'];
            echo $this->get.' $_GET request';
            echo '<br>';
        }
        if (!empty($_POST['request'])) {
            $this->post = $_POST['request'];
            echo $this->post.' $_POST request';
            echo '<br>';
        }
        $GLOBALS['a'] = "Part4 GLOBAL";
        $this->helper = new Part4Helper();


    }
}