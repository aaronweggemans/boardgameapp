<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 17/10/2018
 * Time: 13:05
 */

session_start();
session_destroy();
header("Location: login");