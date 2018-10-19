<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 18/10/2018
 * Time: 15:04
 */

try {
    $app['database']->delete("games", $_POST['id']);

    header("Location: games");
} catch (Exception $e)
{
    header("Location: games");
}