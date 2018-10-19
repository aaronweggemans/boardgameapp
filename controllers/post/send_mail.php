<?php
/**
 * Created by PhpStorm.
 * User: aaronweggemans
 * Date: 19/10/2018
 * Time: 21:09
 */

if ($_POST) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $randPassword = substr(md5(microtime()), rand(0, 26), 8);

    $conditions = ["fname", "lname", "email", "mobile", "password"];
    $values = [$username, "Tijdelijke Speler", $email, "0612345678", $randPassword];

    $to = $email;
    $subject = "Er is een gebruiker voor u aangemaakt";
    $txt = "Beste meneer/mevrouw $username.
            Er is een gebruiker voor u aangemaakt!
            
            Uw wachtwoord is tijdelijk $randPassword
            
            Met vriendelijke groet,
            
            Aaron Weggemans";
    $headers = "From: webmaster@example.com";

    try {
        mail($to, $subject, $txt, $headers);

        $app['database']->insertInto("users", $conditions, $values);

        header("Location: users");
    } catch (Exception $e) {
        header("Location: users");
    }
}