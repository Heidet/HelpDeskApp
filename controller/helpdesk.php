<?php
 /**if(!isset($_SESSION['Logged']) || $_SESSION['Logged'] !=  true){
    header('Location: index.php?action=connexion');
 } // Si le mot de passe est bon sur les connexion des pages BackEnd**/

 
// Chargement des classes
require_once('models/ticketManager.php');

function newTicket($twig)
{
    echo $twig->render('newTicket.html.twig');
   //include('views/helpdesk/newTicket.php');
}

function addTicket($titre, $numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact, $priorite, $categorie, $document, $contenu) 
{
    $ticketManager = new ticketManager();
    $affectedLines = $ticketManager->addTicket($titre, $numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact, $priorite, $categorie, $document, $contenu);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le ticket !');
    }
    else {
        echo "ajout ok";
        //header('Location: localhost:8888/views/helpdesk/newTicket.php'); 
    }
}
function listTickets($twig)
{
    $ticketManager = new ticketManager(); 
    $tickets = $ticketManager->getTickets(); 

    echo $twig->render('home.html.twig', ['tickets'=>$tickets]);
}

