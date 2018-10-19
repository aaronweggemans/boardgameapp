<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 16/10/2018
 * Time: 21:14
 */

//retrieve data
$email = $_POST['email'];
$password = $_POST['password'];

$app['database']->login($email, $password);
