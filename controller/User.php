<?php

class User
{
    function connexionView()
    {
       include('views/helpdesk/connexion.php'); // inclure dans views front end listposts
    }
    function checkConnexion($username, $password)
    {
    
        $adminManager = new adminManager();
        if($adminManager->checkConnexion($username, $password) == 1 ){
            $_SESSION['Logged'] = true;
            header('Location: index.php?action=adminPanel');
        }
        return $adminManager->checkConnexion($username, $password);
    
    }
}