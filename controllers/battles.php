<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

$table = "battles";
$games = $app['database']->selectAll($table);

require 'views/battles.view.php';