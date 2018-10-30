<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 20/10/2018
 * Time: 14:02
 */

//If there is pressed on a post button
if($_POST)
{
    //insert into database, table name with post value
    $app['database']->delete("battles", $_POST['id']);

    //redirect to battles
    header("Location: battles");
}