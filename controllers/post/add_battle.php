<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 18/10/2018
 * Time: 12:58
 */

//If there is pressed on a post button
if($_POST)
{
    //makes variable for the table
    $table = "battles";

    //creates the database table names in an array
    $conditions = [
        'dtplayed',
        'gameid',
        'playerid01',
        'playerid02',
        'wonby',
        'score'
    ];

    //retrieve posted variables from the fields
    $values = [
        $_POST['dtplayed'],
        $_POST['gameid'],
        $_POST['playerid01'],
        $_POST['playerid02'],
        $_POST['wonby'],
        $_POST['score']
    ];

    //try to do the next
    try {
        //insert the values in table, with table names, and values
        $app['database']->insertInto($table, $conditions, $values);

        //redirect to battles
        header("Location: battles");

    // if this didnt work than this
    } catch (Exception $e)
    {
        //redirect to battles
        header("Location: battles");
    }
}