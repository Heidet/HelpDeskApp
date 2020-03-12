<?php
//session_start(); // démarre le système de sessions. Si le visiteur vient d'arriver sur le site, alors un numéro de session est généré pour lui. 
error_reporting(E_ALL); // reporting des erreur sur la page
ini_set("display_errors", 1);
require_once('controller/helpdesk.php');
require_once('vendor/autoload.php');


$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, [
    /*'cache' => './cache',*/
]);

listTickets($twig);


$routeurAction = [
     'listTickets' => ['controller' => 'Controller\helpdesk', 'methode' => 'listTickets' ],
     'newTicket' => ['controller' => 'Controller\helpdesk', 'methode' => 'newTicket' ],
];  




/**if ($_GET['action'] == 'addTicket') {
        require_once('controller/backend.php');
        if (isset($_POST['numeroClient']) && isset($_POST['nom'])) { //SI l'action addpost et si on à du contenu dans titre et contenu
            addTicket($_POST['numeroClient'], $_POST['nom']);  //alors insertion post
        }
        else {  // SI NON affichage vu post. 
            createTicketViews();
        }
    }*/
   

/*if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listTickets') {
        listTickets();
    }
}*/

/*if ($_GET['action'] == 'connexion') {
    if(isset($_SESSION['Logged']) && $_SESSION['Logged'] =  true){
        header('Location: index.php?action=adminPanel');
     }
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            checkConnexion($_POST['username'],  $_POST['password']);
        }
        else {
            echo 'Erreur : tous les champs ne sont pas remplis !';
        }
    }
    connexionView();
}
if ($_GET['action'] == 'deconnexion') {
    session_destroy();
    header('Location: index.php?action=connexion');
}


/*require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array('cache' => false)); 

echo $twig->render('twig-home.html.twig');*/

