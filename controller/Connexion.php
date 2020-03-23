<?php namespace Controller;
require_once('models/connectManager.php');

class Connexion
{
    function checkConnexion($twig)
    {

        $username = null;
        $password = null;
        if(isset($_POST['username'])) $titre = $_POST['username']; 
        if(isset($_POST['password'])) $numeroClient = $_POST['password'];

        if(isset($_SESSION['Logged']) && $_SESSION['Logged'] =  true){
            echo $twig->render('listTicket.html.twig');
        }
        if(!isset($_SESSION['Logged']) || $_SESSION['Logged'] !=  true){
            echo $twig->render('connexion.html.twig');
            
        }
            if (!empty($_POST['username']) && !empty($_POST['password'])) {
                $connectManager = new \Model\connectManager();
                if($connectManager->userConnexion($username, $password) == 1 ){
                    $_SESSION['Logged'] = true;
                    echo $twig->render('listTicket.html.twig');
                }
                return $connectManager->userConnexion($username, $password);
                echo ' ok connecter';

            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        

    }

  
    function deconnexion($twig) 
    {
            session_destroy();
            echo $twig->render('connexion.html.twig');

    }
}

