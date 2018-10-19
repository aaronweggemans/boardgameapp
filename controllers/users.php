<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */
//database insert retrieve all users and make loop in the view
$table = "users";

$users = $app["database"]->selectAll($table);

require 'views/users.view.php';