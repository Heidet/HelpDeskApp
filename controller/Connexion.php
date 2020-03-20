<?php namespace Controller;
require_once('models/connectManager.php');

class Connexion
{

    function checkConnexion($username, $password)
    {
        if(isset($_SESSION['Logged']) && $_SESSION['Logged'] =  true){
            echo $twig->render('listTicket.html.twig');
        }

        if (isset($_POST['username']) && isset($_POST['password'])) {
            if (!empty($_POST['username']) && !empty($_POST['password'])) {
                $adminManager = new \Model\connectManager();
                if($adminManager->checkConnexion($username, $password) == 1 ){
                    $_SESSION['Logged'] = true;
                    header('Location: index.php?action=dash');
                }
                return $adminManager->checkConnexion($username, $password);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        echo $twig->render('connexion.html.twig');
    }
}

/*function checkConnexion($username, $password)
{
    

    $adminManager = new \Model\adminManager();
    if($adminManager->checkConnexion($username, $password) == 1 ){
        $_SESSION['Logged'] = true;
        header('Location: index.php?action=dash');
    }
    return $adminManager->checkConnexion($username, $password);

}
}*/