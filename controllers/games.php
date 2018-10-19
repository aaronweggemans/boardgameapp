<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

$games = $app['database']->selectAll("games");
require 'views/games.view.php';