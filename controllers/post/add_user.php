<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 12/10/2018
 * Time: 14:16
 */

//If there is pressed on a post button
if ($_POST) {
    //creates table variable
    $table = "users";

    //creates variable for database column names
    $conditions = ["fname", "lname", "email", "mobile", "password"];

    //retrieve values from view page
    $value = [$_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['mobile'], $_POST['password']];

    //try's next code
    try {
        //database insert the next code
        $app['database']->insertInto($table, $conditions, $value);

        //redirect to users
        header("Location: users");

    //if this didnt work than this
    } catch (Exception $e) {
        //redirect to users
        header("Location: users");
    }
}