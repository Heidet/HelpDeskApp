<?php
 /**if(!isset($_SESSION['Logged']) || $_SESSION['Logged'] !=  true){
    header('Location: index.php?action=connexion');
 } // Si le mot de passe est bon sur les connexion des pages BackEnd**/

 
// Chargement des classes
require_once('models/ticketManager.php');

function createTicketViews()
{
   include('views/helpdesk/newTicket.php');
}

function addTicket($numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact, $priorite, $categorie, $document, $contenu) 
{
    $ticketManager = new ticketManager();
    $affectedLines = $ticketManager->addTicket($numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact, $priorite, $categorie, $document, $contenu);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le ticket !');
    }
    else {
        //echo "ajout ok";
        header('Location: localhost:8888/views/helpdesk/newTicket.php'); //redirection sur crud admin une fois l'action fini . 
    }
}
