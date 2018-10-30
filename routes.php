<?php
/**
 * GET routes
 */

$url_prefix_empty='~s1130601/P1_OOAPP_Opdracht';
$url_prefix=$url_prefix_empty.'/';

//If session Login exists, your able to go the the next routes
if($_SESSION['login'])
{

    //GET
    $router->get($url_prefix.'home', 'controllers/index.php');
    $router->get($url_prefix.'players', 'controllers/players.php');
    $router->get($url_prefix.'games', 'controllers/games.php');
    $router->get($url_prefix.'users', 'controllers/users.php');
    $router->get($url_prefix.'battles', 'controllers/battles.php');
    $router->get($url_prefix.'excercise', 'controllers/excercise.php');
    $router->get($url_prefix.'logout', 'controllers/logout.php');

    //VERWIJDERIE
    $router->post($url_prefix.'del_user', 'controllers/post/del_user.php');
    $router->post($url_prefix.'del_game', 'controllers/post/del_game.php');
    $router->post($url_prefix.'del_battle', 'controllers/post/del_battle.php');

    //POST
    $router->post($url_prefix.'add_player', 'controllers/post/add_player.php');
    $router->post($url_prefix.'add_user', 'controllers/post/add_user.php');
    $router->post($url_prefix.'del_game', 'controllers/post/del_game.php');
    $router->post($url_prefix.'add_game', 'controllers/post/add_game.php');
    $router->post($url_prefix.'add_battle', 'controllers/post/add_battle.php');

    //BUILD
    $router->get($url_prefix.'createUser', 'controllers/createUser.php');
    $router->get($url_prefix.'creategame', 'controllers/createGame.php');
    $router->get($url_prefix.'addBattle', 'controllers/createBattle.php');

    //SENDING MAIL
    $router->post($url_prefix.'send_mail', 'controllers/post/send_mail.php');
}
else {
    //else if the session not exists your able to route to this

    //GET
    $router->get($url_prefix_empty.'', 'controllers/login.php');
    $router->get($url_prefix.'login', 'controllers/login.php');

    //POST
    $router->post($url_prefix.'login', 'controllers/post/login.php');
}