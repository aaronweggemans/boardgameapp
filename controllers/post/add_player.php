<?php

if($_POST)
{
    $nickname = $_POST['playername'];
    $gamestatus = 1;

    die(var_dump($query->insertIntoPlayer($nickname, $gamestatus)));
}