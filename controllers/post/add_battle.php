<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 18/10/2018
 * Time: 12:58
 */

if($_POST)
{
    $table = "battles";

    $conditions = [
        'dtplayed',
        'gameid',
        'playerid01',
        'playerid02',
        'wonby',
        'score'
    ];

    $values = [
        $_POST['dtplayed'],
        $_POST['gameid'],
        $_POST['playerid01'],
        $_POST['playerid02'],
        $_POST['wonby'],
        $_POST['score']
    ];

    try {
        $app['database']->insertInto($table, $conditions, $values);
        header("Location: battles");
    } catch (Exception $e)
    {
        header("Location: battles");
    }
}