<?php namespace Controller;
require_once('models/connectManager.php');

class Connexion
{

    function checkConnexion($twig)
    {
       
            $username = null;
            $password = null;
            if(isset($_POST['username'])) $username = $_POST['username']; 
            if(isset($_POST['password'])) $password = $_POST['password'];

        $adminManager = new \Model\connectManager();
        if($adminManager->checkConnexion($username, $password) == 1 ){
            $_SESSION['Logged'] = true;
            $listTickets = new \Controller\Helpdesk();
            $listTickets->listTickets($twig);
        }
        return $adminManager->checkConnexion($username, $password);
    
    }
    function deconnexion($twig) 
    {
            session_destroy();
            echo $twig->render('connexion.html.twig');

    }
}

