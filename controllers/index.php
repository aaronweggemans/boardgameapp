<?php
/**
 * get class
 * @Player
 * @Users
 */

//requires the core in player and the users
require 'core/Player.php';
require 'core/Users.php';

/**
 * @var $results database query for landing page
 */

//retrieves all users from database
$results = $app['database']->selectAll('users', 'Users');

/**
 * @internal view index.php
 */

//require the index view
require 'views/index.view.php';