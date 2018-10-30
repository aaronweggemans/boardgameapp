<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 18/10/2018
 * Time: 15:04
 */

//try's the next code else catch
try {
    //database remove game where game has game id.. see querybuilder
    $app['database']->delete("games", $_POST['id']);

    //redirect to games
    header("Location: games");

//if this didnt work redirect to games
} catch (Exception $e)
{
    //redirect to games
    header("Location: games");
}