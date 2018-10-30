<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 18/10/2018
 * Time: 12:59
 */

//retrieve all data from users and games
$users = $app['database']->selectAll("users");
$games = $app['database']->selectAll("games");

//goes to add battle view
require "views/addBattle.view.php";