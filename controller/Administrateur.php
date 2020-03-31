<?php namespace Controller;
require_once('models/clientManager.php');
class Administrateur
{
    
    function deleteTicket($twig)
    {

        $ticketId = null;
        if(isset($_POST['id'])) $titre = $_POST['id']; 

        $ticketManager = new ticketManager();
        $affectedLines = $ticketManager->deleteTicket($postId);

        if ($affectedLines === false) {
            throw new Exception('Impossible de supprimer ce ticket !');
        }
        else {
            //echo "ajout ok";
            header('Location: index.php?action=listTickets');; //Pour rester sur la même page une fois l'action supprimer.
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
                    echo "ajout ok";
                    //header('Location: index.php?action=listTickets');
                }
            }

            else{
                echo $twig->render('addClient.html.twig');
           }

    }
}