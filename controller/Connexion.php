<?php namespace Controller;
require_once('models/connectManager.php');

class Connexion
{
    function checkConnexion($twig)
    {

    

    }

  
    function deconnexion($twig) 
    {
            session_destroy();
            echo $twig->render('connexion.html.twig');

    }
}

