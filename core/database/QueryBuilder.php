<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

//makes a possibilty to use sessions
session_start();

class QueryBuilder
{
    //creates an protected variable to use in all public functions
    protected $pdo;

    //every time an function gets called the variable pdo will be placed
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    //makes an function retrieve all data from the database where table is ...
    public function selectAll($table)
    {
        //prepares an database injection
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");

        //execute the statement
        $statement->execute();

        //returns the value
        return $statement->fetchAll();
    }

    //creates an function to specifiy what you want to select
    public function selectFrom($finder, $table, $condition, $where)
    {
        //prepares an database injections
        $statement = $this->pdo->prepare("SELECT {$finder} FROM {$table} WHERE {$condition} = {$where}");

        //executes this injection
        $statement->execute();

        //returns the data
        return $statement->fetch();
    }

    //not used i dont understand and it doenst work
    public function checkInto($table, $conditions, $values)
    {
        //prepares code
        $statement = $this->pdo->prepare(
            "INSERT INTO {$table} ($conditions) VALUES ($values)"
            //INSERT INTO `users` (`column1`, `column2`, `column3`) VALUES ()
        );

        //places the parameters into the statement, what doenst happen
        $statement->bindParam(':calories', $calories, PDO::PARAM_INT);
        $statement->bindParam(':colour', $colour, PDO::PARAM_STR, 12);

        //returns output from statement
        die(var_dump($statement));

        //exectues it
        $statement->execute();

        //returns code
    }

    //insert into database function
    public function insertInto($table, $conditions, $values)
    {
        //creates an array with and end an , everytime there is going an function where is returns the values
        //with `` around it
        $string_conditions = implode(',', array_map(function ($item) {
            return sprintf("`%s`", $item);
        }, $conditions));

        //same story but than with ''
        $string_values = implode(',', array_map(function ($str){
            return sprintf("'%s'", $str);
        }, $values));

        //prepares the injection
        $statement = $this->pdo->prepare("INSERT INTO {$table} ({$string_conditions})
        VALUES ({$string_values})");

        //return the code and executes it
        return $statement->execute();
    }

    //an function for logging in to the system
    public function login($email, $password) {
        //places quotes arround the mail
        $mail = sprintf("'%s'", $email);

        //prepares sql injection
        $passwordState = $this->pdo->prepare("SELECT `password` FROM `users` WHERE email = {$mail}");

        //executes the next code
        $passwordState->execute();

        //creates variable where the fetched data
        $finder = $passwordState->fetch();

        //retrieve password and compare it with retrieved password
        if($finder['password'] == $password)
        {
            //set session and check
            $_SESSION['login'] = $email;

            //prepares database injections
            $usernameState = $this->pdo->prepare("SELECT `fname` FROM `users` WHERE email = {$mail}");

            //executes this injection
            $usernameState->execute();

            //fetch data
            $usernameFetch = $usernameState->fetch();

            //creates session for usename and place fname in it
            $_SESSION['username'] = $usernameFetch['fname'];

            //redirect to home
            header("Location: home");
        }
        else {
            //if password is not equal redirect to login AND SESSION IS NOT SETTED
            header("Location: login");
        }
    }

    //makes an delete function
    public function delete($table, $id)
    {
        //prepare sql injection
        $statement = $this->pdo->prepare("DELETE FROM $table WHERE `id` = $id");

        //executes this
        $statement->execute();
    }

}