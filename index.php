<?php
//session_start(); // démarre le système de sessions. Si le visiteur vient d'arriver sur le site, alors un numéro de session est généré pour lui. 
error_reporting(E_ALL); // reporting des erreur sur la page
ini_set("display_errors", 1);
require_once('controller/Helpdesk.php');
require_once('vendor/autoload.php');


$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, [
    //'cache' => './cache',
]);

//listTickets($twig);


$routeurAction = [
     'listClients' => ['controller' =>  'Controller\Helpdesk', 'methode' => 'listClients' ],
     'checkConnexion' => ['controller' =>  'Controller\Connexion', 'methode' => 'checkConnexion' ],
     'listTickets' => ['controller' =>  'Controller\Helpdesk', 'methode' => 'listTickets' ],
     'newTicket' => ['controller' => 'Controller\Helpdesk', 'methode' => 'newTicket' ],
     'ticket' => ['controller' => 'Controller\Helpdesk', 'methode' => 'ticket' ],

     //'connexion' => ['controller' => 'Controller\User', 'methode' => 'connexion' ],
];  

$controller_name = $routeurAction[$_GET['action']]['controller'];
$methode_name = $routeurAction[$_GET['action']]['methode'];

//echo $methode_name;

$controller = new $controller_name;
$controller->$methode_name($twig);
//var_dump($controller);
//$controller->$routeurAction[$_GET['action']]['methode']($twig);
 
