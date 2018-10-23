<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 18/10/2018
 * Time: 12:59
 */

$users = $app['database']->selectAll("users");

$games = $app['database']->selectAll("games");

require "views/addBattle.view.php";