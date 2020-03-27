<?php namespace Controller;
require_once('models/connectManager.php');
require_once('models/ticketManager.php');
require_once('controller/Helpdesk.php');
class Connexion
{
    function checkConnexion($twig)
    {
     
        if(isset($_SESSION['Logged']) && $_SESSION['Logged'] == true){
            header('Location: index.php?action=listTickets');
            
         }
         
        if (isset($_POST['username']) && isset($_POST['password'])) {
            if (!empty($_POST['username']) && !empty($_POST['password'])) {
                $connexion = new \Model\connectManager();
                if($connexion->userConnexion($_POST['username'], $_POST['password']) == 1 ){
                    $_SESSION['Logged'] = true;
                    print_r('connecter');
                    var_dump('connecter');
                    header('Location: index.php?action=listTickets');
                    //echo $twig->render('listTicket.html.twig');
                   
                }
                return $connexion->userConnexion($_POST['username'], $_POST['password']);
            }
            else {
                echo 'Erreur !';
            }
        }
        echo $twig->render('connexion.html.twig');
    }

  
    function deconnexion() 
    {
            session_destroy();
            header('Location: index.php?action=connexion');
    }
}

