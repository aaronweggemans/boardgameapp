<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">

    <!-- Title   -->
    <title>Login | Boardgameapp</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <!-- Fontawesome / icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>
<body>
<div class="sectionlogin">
    <div class="row">
        <div class="col-lg-3 col-centered" align="center">
            <p class="welcomeLogin nopa fadeIn">Login!</p>
            <small class="smallLogin nopa fadeIn">
                <div class="row">
                    <form action="login" method="post">
                        <div class="row mb-2">
                            <div class="col-md-4">
                                Email adres:
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="email" placeholder="stephanhoeksema@hotmail.nl">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4">
                                Wachtwoord:
                            </div>
                            <div class="col-md-8">
                                <input type="password" class="form-control" name="password" placeholder="heelgeheim123">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="align" align="right">
                                    <input type="submit" class="btn btn-primary" value="Login">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </small>
        </div>
    </div>
</div>
<?php require "partials/foot.php" ?>