<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */
/**
 * @database - configuration for PDO()
 */

//Sets the next data in connection and makes pdo connection
return [
    'database' => [
        'name' => 'gameapp',
        'username' => 'root',
        'password' => 'rootroot',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];
