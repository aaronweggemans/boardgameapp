<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 18/10/2018
 * Time: 14:14
 */

//try's the next code
try {

    //database delete users where posted id
    $app['database']->delete("users", $_POST['id']);

    //redirects to users
    header("Location: users");

//if the code doenst work than this
} catch (Exception $e) {

    //redirects to users
    header("Location: users");

}