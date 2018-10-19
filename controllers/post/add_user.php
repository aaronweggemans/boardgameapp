<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 12/10/2018
 * Time: 14:16
 */

if ($_POST) {
    $table = "users";
    $conditions = ["fname", "lname", "email", "mobile", "password"];
    $value = [$_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['mobile'], $_POST['password']];

    try {
        $app['database']->insertInto($table, $conditions, $value);
        header("Location: users");
    } catch (Exception $e) {
        header("Location: users");
    }
}