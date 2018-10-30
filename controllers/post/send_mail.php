<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 19/10/2018
 * Time: 21:09
 */

//If there is pressed on a post button
if ($_POST) {
    //Retrieve data
    $username = $_POST['username'];
    $email = $_POST['email'];

    //creates random password with substring, uses hash for number with length of 8 charachters
    $randPassword = substr(md5(microtime()), rand(0, 26), 8);

    //Gets the columns from database and place this in array
    $conditions = ["fname", "lname", "email", "mobile", "password"];

    //creates an array with the next values in it
    $values = [$username, "Tijdelijke Speler", $email, "0612345678", $randPassword];

    //makes mail server ready
    $to = $email;
    $subject = "Er is een gebruiker voor u aangemaakt";
    $txt = "Beste meneer/mevrouw $username.
            Er is een gebruiker voor u aangemaakt!
            
            Uw wachtwoord is tijdelijk $randPassword
            
            Met vriendelijke groet,
            
            Aaron Weggemans";
    $headers = "From: noreply@boardgamemail.com";

    //try's the next code
    try {
        //mails to the next conditions
        mail($to, $subject, $txt, $headers);

        //database insert, makes users with the conditions and values
        $app['database']->insertInto("users", $conditions, $values);

        //redirect to users
        header("Location: users");

    //if the code doenst work
    } catch (Exception $e) {
        //redirect to users
        header("Location: users");
    }
}