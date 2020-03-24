<?php namespace Controller;
require_once('models/connectManager.php');

class Connexion
{
    function checkConnexion($twig)
    {
        if(isset($_SESSION['Logged']) && $_SESSION['Logged'] =  true){
            echo $twig->render('listTicket.html.twig');
         }
        if (isset($_POST['username']) && isset($_POST['password'])) {
            if (!empty($_POST['username']) && !empty($_POST['password'])) {
                $connectManager = new \Model\connectManager();
                if($connectManager->userConnexion($_POST['username'], $_POST['password']) == 1 ){
                    $_SESSION['Logged'] = true;
                    $ticketManager = new \Model\ticketManager(); 
                    $tickets = $ticketManager->getTickets(); 
                    echo $twig->render('listTicket.html.twig', ['tickets'=>$tickets]);
                        }
                return $connectManager->userConnexion($_POST['username'], $_POST['password']);
            }
            else { 
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        echo $twig->render('connexion.html.twig');
    }

  
    function deconnexion($twig) 
    {
            session_destroy();
            echo $twig->render('connexion.html.twig');

    }
}

