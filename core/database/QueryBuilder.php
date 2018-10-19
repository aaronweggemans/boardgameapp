<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */
session_start();

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();

//        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
        return $statement->fetchAll();
    }

    public function selectFrom($table, $finder, $condition, $where)
    {
        $statement = $this->pdo->prepare("SELECT {$finder} FROM {$table} WHERE {$condition} = {$where}");
        $statement->execute();

        return $statement->fetchAll();
    }

    public function checkInto($table, $conditions, $values)
    {
        $statement = $this->pdo->prepare(
            "INSERT INTO {$table} ($conditions) VALUES ($values)"
            //INSERT INTO `users` (`column1`, `column2`, `column3`) VALUES ()
        );
        $statement->bindParam(':calories', $calories, PDO::PARAM_INT);
        $statement->bindParam(':colour', $colour, PDO::PARAM_STR, 12);

        die(var_dump($statement));
        $statement->execute();
    }

    public function insertInto($table, $conditions, $values)
    {
        //ZOEK OP BIND PARAMS
        $string_conditions = implode(',', array_map(function ($item) {
            return sprintf("`%s`", $item);
        }, $conditions));

        $string_values = implode(',', array_map(function ($str){
            return sprintf("'%s'", $str);
        }, $values));

        $statement = $this->pdo->prepare("INSERT INTO {$table} ({$string_conditions})
        VALUES ({$string_values})");

        return $statement->execute();
    }

    public function login($email, $password) {
        $mail = sprintf("'%s'", $email);
        $passwordState = $this->pdo->prepare("SELECT `password` FROM `users` WHERE email = {$mail}");
        $passwordState->execute();

        $finder = $passwordState->fetch();

        if($finder['password'] == $password)
        {
            //set session and check
            $_SESSION['login'] = $email;
            $usernameState = $this->pdo->prepare("SELECT `fname` FROM `users` WHERE email = {$mail}");
            $usernameState->execute();

            $usernameFetch = $usernameState->fetch();

            $_SESSION['username'] = $usernameFetch['fname'];

            header("Location: home");
        }
        else {
            header("Location: login");
        }
    }

    public function delete($table, $id)
    {
        $statement = $this->pdo->prepare("DELETE FROM $table WHERE `id` = $id");
        $statement->execute();
    }

}