<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

//sets table name
$table = "battles";

//retrieve all data from battles
$games = $app['database']->selectAll($table);

//go's to the view battle
require 'views/battles.view.php';