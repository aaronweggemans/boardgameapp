<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 17/10/2018
 * Time: 14:50
 */

//If there is pressed on a post button
if ($_POST) {

    //creates table variable
    $table = "games";

    //creates the database table names in an array
    $conditions = [
        'name',
        'nop',
        'dor',
        'publisherid',
        'duration',
        'description'
    ];

    //retrieve posted data
    $values = [
        $_POST['name'],
        $_POST['nop'],
        $_POST['dor'],
        12,
        $_POST['duration'],
        $_POST['description'],
    ];

    //try's the next code
    try {
        //insert data injection into query builder
        $app['database']->insertInto($table, $conditions, $values);

        //redirect to games
        header("Location: games");

    //if this didnt work than catch
    } catch (Exception $e) {

        //redirect to games
        header("Location: games");
    }
}


