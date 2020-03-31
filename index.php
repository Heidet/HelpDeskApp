<?php
session_start(); // démarre le système de sessions. Si le visiteur vient d'arriver sur le site, alors un numéro de session est généré pour lui. 
error_reporting(E_ALL); // reporting des erreur sur la page
ini_set("display_errors", 1);
//require_once('controller/Helpdesk.php');
require_once('controller/Connexion.php');
require_once('controller/Administrateur.php');
require_once('vendor/autoload.php');


$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, [
    //'cache' => './cache',
    ]);

/*--------- Routage méthode et action ---------*/ 

if(isset($_SESSION['Logged']) && $_SESSION['Logged'] == true){
    if(isset($_SESSION) && !empty($_SESSION['admin'])){
        $twig->addGlobal('isAdmin', $_SESSION['admin']);

    }
            $routeurAction = [
                'administration' => ['controller' =>  'Controller\Administrateur', 'methode' => 'administrationView' ],
                'addUser' => ['controller' =>  'Controller\Administrateur', 'methode' => 'addUser' ],
                'connexion' => ['controller' =>  'Controller\Connexion', 'methode' => 'checkConnexion' ],
                'deconnexion' => ['controller' =>  'Controller\Connexion', 'methode' => 'deconnexion' ],   
                'deleteTicket' => ['controller' =>  'Controller\Administrateur', 'methode' => 'deleteTicket' ],      
                'searchClients' => ['controller' =>  'Controller\Helpdesk', 'methode' => 'searchClients' ],
                'listClients' => ['controller' =>  'Controller\Helpdesk', 'methode' => 'annuaireClients' ],
                'addClient' => ['controller' =>  'Controller\Administrateur', 'methode' => 'addClient' ],
                'editTicket' => ['controller' =>  'Controller\Helpdesk', 'methode' => 'editTicket' ],
                'listTickets' => ['controller' =>  'Controller\Helpdesk', 'methode' => 'listTickets' ],
                'addTicket' => ['controller' => 'Controller\Helpdesk', 'methode' => 'addTicket' ],
                'ticket' => ['controller' => 'Controller\Helpdesk', 'methode' => 'ticket' ]
            ];
        
                if (isset($_GET) && isset($_GET['action']) && array_key_exists($_GET['action'], $routeurAction) == true){
                
                    $controller_name = $routeurAction[$_GET['action']]['controller'];
                    $methode_name = $routeurAction[$_GET['action']]['methode'];
                    //echo $methode_name; 
                    $controller = new $controller_name;
                    $controller->$methode_name($twig);
                }
                else {
                    header('Location: index.php?action=listTickets'.$username);
                }
   
}
else {
                
    $home = new \Controller\Connexion();
    $homePage = $home->checkConnexion($twig);
}
       
            
         