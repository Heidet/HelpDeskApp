<?php namespace Controller;
require_once('models/connectManager.php');
require_once('models/ticketManager.php');
require_once('controller/Helpdesk.php');
class Connexion
{
    function checkConnexion($twig)
    {
        //$connexion = new \Model\connectManager();
       
        /*if(isset($_SESSION['Logged']) && $_SESSION['Logged'] =  true){
            echo $twig->render('listTicket.html.twig');
         }*//*if(isset($_SESSION['Logged']) && $_SESSION['Logged'] =  true){
            echo $twig->render('listTicket.html.twig');
         }
         
        if (isset($_POST['username']) && isset($_POST['password'])) {
            if (!empty($_POST['username']) && !empty($_POST['password'])) {
                if($connexion->userConnexion($_POST['username'], $_POST['password']) == 1 ){
                    $_SESSION['Logged'] = true;
                    print_r('connecter');
                    var_dump('connecter');
                    //echo $twig->render('listTicket.html.twig');
                }
                return $connexion->userConnexion($_POST['username'], $_POST['password']);
            }
            else {
                echo 'Erreur !';
            }
        }
        echo $twig->render('connexion.html.twig');*/
    }

  
    function deconnexion($twig) 
    {
            session_destroy();
            echo $twig->render('connexion.html.twig');

    }
}

