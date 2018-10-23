<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 20/10/2018
 * Time: 14:02
 */

if($_POST)
{
    $app['database']->delete("battles", $_POST['id']);

    header("Location: battles");
}