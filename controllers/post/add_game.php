<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 17/10/2018
 * Time: 14:50
 */

if ($_POST) {
    $table = "games";
    $conditions = [
        'name',
        'nop',
        'dor',
        'publisherid',
        'duration',
        'description'
    ];
    $values = [
        $_POST['name'],
        $_POST['nop'],
        $_POST['dor'],
        $_POST['publisherid'],
        $_POST['duration'],
        $_POST['description'],
    ];

    try {
        $app['database']->insertInto($table, $conditions, $values);
        header("Location: games");
    } catch (Exception $e) {
        header("Location: games");
    }
}


