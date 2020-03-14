<?php namespace Controller;

 /**if(!isset($_SESSION['Logged']) || $_SESSION['Logged'] !=  true){
    header('Location: index.php?action=connexion');
 } // Si le mot de passe est bon sur les connexion des pages BackEnd**/

// Chargement des classes
require_once('models/ticketManager.php');

    class Helpdesk 
    {

        function newTicket($twig)
        {
            if(isset($_POST)&& !empty($_POST)){
                $titre = null;
                $numeroClient = null;
                $nom = null;
                $prenom = null;
                $mail = null;
                $ville = null;
                $zip = null;
                $contact = null;
                $priorite = null;
                $categorie = null;
                $contenu = null;
                if(isset($_POST['titre'])) $titre = $_POST['titre']; // 
                if(isset($_POST['numeroClient'])) $numeroClient = $_POST['numeroClient'];
                if(isset($_POST['nom'])) $nom = $_POST['nom'];
                if(isset($_POST['prenom'])) $prenom = $_POST['prenom'];
                if(isset($_POST['mail'])) $mail = $_POST['mail'];
                if(isset($_POST['ville'])) $ville = $_POST['ville'];
                if(isset($_POST['zip'])) $zip = $_POST['zip'];
                if(isset($_POST['contact'])) $contact = $_POST['contact'];
                if(isset($_POST['priorite'])) $priorite = $_POST['priorite'];
                if(isset($_POST['categorie'])) $categorie = $_POST['categorie'];
                if(isset($_POST['contenu'])) $contenu = $_POST['contenu'];
                
                $ticketManager = new \Model\ticketManager();
                $affectedLines = $ticketManager->addTicket($titre, $numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact, $priorite, $categorie,  $contenu);
    
                if ($affectedLines === false) {
                    throw new \Exception('Impossible d\'ajouter le ticket !');
                }
                else {
                    echo "ajout ok";
                    //header('Location: localhost:8888/views/helpdesk/newTicket.php'); 
                }
            }

            else{
                echo $twig->render('newTicket.html.twig');
           }

        }

        function listTickets($twig)
        {
            $ticketManager = new \Model\ticketManager(); 
            $tickets = $ticketManager->getTickets(); 

            echo $twig->render('home.html.twig', ['tickets'=>$tickets]);
        }

        function ticket()
        {
            $ticketManager = new ticketManager();
            $ticket = $ticketManager->getTicket($_GET['id']);

            echo $twig->render('detailTicket.html.twig');
        }
       
    }