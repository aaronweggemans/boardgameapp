<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

class Connection
{
    public static function make($config)
    {
        /**
         * PDO() to your database setup in config file
         */
        //trys the next code
        try {
            //returns an pdo connection with values from config.php
            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );

        //if it not worked show error message
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}