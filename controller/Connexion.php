<?php namespace Controller;
require_once('models/userManager.php');
class Connexion
{
    function checkConnexion($twig)
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            if (!empty($_POST['username']) && !empty($_POST['password'])) {
                $connexion = new \Model\userManager();
                $user = $connexion->userConnexion($_POST['username'], $_POST['password']);
                if(!empty($user)){
                    $_SESSION['Logged'] = true;

                    if((bool)$user['isAdmin']){
                        $_SESSION['admin'] = true;
                   
                    } 
                    else{
                        $_SESSION['admin'] = false;
                    }
                   header('Location: index.php?action=listTickets&amp;');
    
                    }
            }
            else {
                throw new \Exception('Impossible de ce connecter !');
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

