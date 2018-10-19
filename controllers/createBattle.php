<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 18/10/2018
 * Time: 12:59
 */

$table = "users";

$users = $app['database']->selectAll($table);

require "views/addBattle.view.php";