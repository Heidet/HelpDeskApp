<?php namespace Controller;
require_once('models/connectManager.php');
require_once('controller/Helpdesk.php');
class Connexion
{
    function checkConnexion($twig)
    {

        if (isset($_POST['username']) && isset($_POST['password'])) {
            if (!empty($_POST['username']) && !empty($_POST['password'])) {
                $connexion = new \Model\connectManager();
                if($connexion->userConnexion($_POST['username'], $_POST['password']) == 1 ){
                    $_SESSION['Logged'] = true;
                    $username = $_POST['username'];
                    echo $username;
                    header('Location: index.php?action=listTickets&'.$username);
                    //echo 'Je suis connecter';
                    }
                return $connexion->userConnexion($_POST['username'], $_POST['password']);
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

