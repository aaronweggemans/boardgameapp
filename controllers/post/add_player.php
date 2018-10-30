<?php

//If there is pressed on a post button
if($_POST)
{
    //creates variable nickname
    $nickname = $_POST['playername'];

    //sets variable gamesstatus into
    $gamestatus = 1;

    //go to insert into player query builder
    $app['database']->insertIntoPlayer($nickname, $gamestatus);
}