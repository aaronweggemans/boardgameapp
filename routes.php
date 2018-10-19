<?php
/**
 * GET routes
 */

if($_SESSION['login'])
{
    //GET
    $router->get('home', 'controllers/index.php');
    $router->get('players', 'controllers/players.php');
    $router->get('games', 'controllers/games.php');
    $router->get('users', 'controllers/users.php');
    $router->get('battles', 'controllers/battles.php');
    $router->get('excercise', 'controllers/excercise.php');
    $router->get('logout', 'controllers/logout.php');

    //VERWIJDERIE
    $router->post('del_user', 'controllers/post/del_user.php');
    $router->post('del_game', 'controllers/post/del_game.php');

    //POST
    $router->post('add_player', 'controllers/post/add_player.php');
    $router->post('add_user', 'controllers/post/add_user.php');
    $router->post('del_game', 'controllers/post/del_game.php');
    $router->post('add_game', 'controllers/post/add_game.php');
    $router->post('add_battle', 'controllers/post/add_battle.php');

    //BUILD
    $router->get('createUser', 'controllers/createUser.php');
    $router->get('creategame', 'controllers/createGame.php');
    $router->get('addBattle', 'controllers/createBattle.php');

    //SENDING MAIL
    $router->post('send_mail', 'controllers/post/send_mail.php');
}
else {
    //GET
    $router->get('', 'controllers/login.php');
    $router->get('login', 'controllers/login.php');

    //POST
    $router->post('login', 'controllers/post/login.php');
}