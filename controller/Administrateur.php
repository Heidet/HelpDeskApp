<?php namespace Controller;
require_once('models/userManager.php');
require_once('models/clientManager.php');
require_once('models/ticketManager.php');
class Administrateur
{
    
    function deleteTicket($twig)
    {
        if (isset($_GET['id']) && $_GET['id'] > 0) {

            $ticketManager = new \Model\ticketManager();
            $affectedLines = $ticketManager->deleteTicket($_GET['id']);

            if ($affectedLines === false) {
                throw new \Exception('Impossible de supprimer ce ticket !');
            }
            else {
                //echo "ajout ok";
                header('Location: index.php?action=listTickets'); //Pour rester sur la même page une fois l'action supprimer.
            }
        }
    }

    function administrationView($twig)
    {
        echo $twig->render('administration.html.twig');
    }

    /*--------------- Function CRUD User ---------------*/ 
    function listUsers($twig)
    {
        $userManager = new \Model\userManager(); 
        $users = $userManager->getUsers(); 
        
        echo $twig->render('listUser.html.twig', ['users'=>$users]);
         
    }

    function deleteUser($twig)
    {
        if (isset($_GET['id']) && $_GET['id'] > 0) {

            $clientManager = new \Model\userManager();
            $affectedLines = $clientManager->deleteUser($_GET['id']);

            if ($affectedLines === false) {
                throw new \Exception('Impossible de supprimer l\'utilisateur !');
            }
            else {
                //echo "suppression ok";
                header('Location: index.php?action=listUser'); //Pour rester sur la même page une fois l'action supprimer.
            }
        }
    }

    function addUser($twig)
    {
        if(isset($_POST)&& !empty($_POST)){
            if(isset($_POST['username'])) $username = $_POST['username'];
            if(isset($_POST['password'])) $password = $_POST['password'];

            $userManager = new \Model\userManager();
            $affectedLines = $userManager->addUser($username, $password);
            /*if ($_POST['confirm_password'] != $_POST['password']){
                echo '<script>alert("TON TEXTE");</script>'; 
            }*/
            if ($affectedLines === false) {
                throw new \Exception ('Impossible d\'ajouter l\'utilisateur !');
            }
            else {
               header('Location: index.php?action=administration');
            }
        }

        else{
            echo $twig->render('addUser.html.twig');
       }

    }

    /*--------------- Function CRUD Clients ---------------*/ 
    function annuaire($twig)
    {
        $clientManager = new \Model\clientManager(); 
        $clients = $clientManager->getClients(); 
        
        echo $twig->render('annuaire.html.twig', ['clients'=>$clients]);
         
    }


    function deleteClient($twig)
    {
        if (isset($_GET['id']) && $_GET['id'] > 0) {

            $clientManager = new \Model\clientManager();
            $affectedLines = $clientManager->deleteClient($_GET['id']);

            if ($affectedLines === false) {
                throw new \Exception('Impossible de supprimer ce client!');
            }
            else {
                //echo "suppression ok";
                header('Location: index.php?action=annuaire'); //Pour rester sur la même page une fois l'action supprimer.
            }
        }
    }

    function addClient($twig)
    {
        if(isset($_POST)&& !empty($_POST)){
            if(isset($_POST['nom'])) $nom = $_POST['nom'];
            if(isset($_POST['prenom'])) $prenom = $_POST['prenom'];
            if(isset($_POST['mail'])) $mail = $_POST['mail'];
            if(isset($_POST['ville'])) $ville = $_POST['ville'];
            if(isset($_POST['zip'])) $zip = $_POST['zip'];
            if(isset($_POST['contact'])) $contact = $_POST['contact'];
                
            $clientManager = new \Model\clientManager();
            $affectedLines = $clientManager->newClient($nom, $prenom, $mail, $ville, $zip, $contact);
    
            if ($affectedLines === false) {
                throw new \Exception('Impossible d\'ajouter le client !');
            }
            else {
                header('Location: index.php?action=administration');
            }
        }

        else{
            echo $twig->render('addClient.html.twig');
        }
    }

}