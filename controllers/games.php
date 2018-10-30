<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

//retrieve all games from database
$games = $app['database']->selectAll("games");

//goes to games view
require 'views/games.view.php';