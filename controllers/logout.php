<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 17/10/2018
 * Time: 13:05
 */

//destroys the session
session_start();
session_destroy();

//redirect to login
header("Location: login");