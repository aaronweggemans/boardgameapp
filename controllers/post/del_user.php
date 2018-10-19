<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 18/10/2018
 * Time: 14:14
 */

try {
    $app['database']->delete("users", $_POST['id']);
    header("Location: users");
} catch (Exception $e) {
    header("Location: users");

}