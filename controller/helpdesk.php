<?php namespace Controller;
//require_once('Connexion.php');
require_once('models/ticketManager.php');
require_once('models/clientManager.php');


    class Helpdesk  
    {

        function addTicket($twig)
        {
            $clientManager = new \Model\clientManager(); 
            $clients = $clientManager->getClients(); 
      
            if(isset($_POST)&& !empty($_POST)){
                if(isset($_POST['titre'])) $titre = $_POST['titre']; 
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
                $document = "";
                if (isset($_FILES['document']) AND $_FILES['document']['error'] == 0)
                    {
                            // Testons si le fichier n'est pas trop gros
                            if ($_FILES['document']['size'] <= 1000000)
                            {
                                $document = basename($_FILES['document']['name']);
                                    // Testons si l'extension est autorisée
                                    $infosfichier = pathinfo($_FILES['document']['name']);
                                    $extension_upload = $infosfichier['extension'];
                                    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                                    if (in_array($extension_upload, $extensions_autorisees))
                                    {
                                            // On peut valider le fichier et le stocker définitivement
                                            move_uploaded_file($_FILES['document']['tmp_name'], 'uploads/' . basename($_FILES['document']['name']));
                                            echo "L'envoi a bien été effectué !";
                                    }
                            }
                    }
                $ticketManager = new \Model\ticketManager();
                $affectedLines = $ticketManager->newTicket($titre, $numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact, $priorite, $categorie, $document, $contenu);
    
                if ($affectedLines === false) {
                    throw new \Exception('Impossible d\'ajouter le ticket !');
                }
                else {
                    echo "ajout ok";
                    //echo $twig->render('newTicket.html.twig'); 
                }
            }

            else{
                echo $twig->render('addTicket.html.twig', ['clients'=>$clients]);
           }

        }

        function listTickets($twig)
        {
            
            $ticketManager = new \Model\ticketManager(); 
            $tickets = $ticketManager->getTickets(); 
            $clientManager = new \Model\clientManager(); 
            $clients = $clientManager->getClients(); 
            
        
            echo $twig->render('listTicket.html.twig', ['tickets'=>$tickets, 'clients'=>$clients]);
             
        }

        function annuaireClients($twig)
        {
            
            $clientManager = new \Model\clientManager(); 
            $clients = $clientManager->getClients(); 
            echo $twig->render('listClients.html.twig', ['clients'=>$clients]);
            
             
        }
        
        function ticket($twig)
        {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
            $ticketManager = new \Model\ticketManager();
            $ticket = $ticketManager->getTicket($_GET['id']);

            echo $twig->render('detailTicket.html.twig', ['ticket'=>$ticket]);
                
            }
            else {
                echo 'Erreur : Aucun ticket trouvé';
            }
        }

        function searchClients()
        {  
            if (isset($_GET) && isset($_GET['term'])){
                $term = $_GET['term'];
           
                $clientManager = new \Model\clientManager(); 
                $clients = $clientManager->searchClients($term); 
    
                header('Content-type: application/json');
                echo json_encode($clients -> fetchAll()); 
            }
            else {
                return [];
            }
        }

        function editTicket($twig)
        {   
                
            if (isset($_GET['id']) && $_GET['id'] > 0){
                if(isset($_POST['titre']) && isset($_POST['numeroClient']) && 
                   isset($_POST['nom']) && isset($_POST['prenom']) && 
                   isset($_POST['mail']) && isset($_POST['ville']) && 
                   isset($_POST['zip']) && isset($_POST['contact']) && 
                   isset($_POST['priorite']) && isset($_POST['categorie']) && 
                   isset($_POST['contenu'])){
    
                    $ticketManager = new \Model\ticketManager();
                    $affectedLines = $ticketManager->editTicket();
                    
                    if ($affectedLines === false) {
                        throw new \Exception('Impossible de modifier ce ticket !'); // lever l'exception XXXX 
                    }
                    else {
                        //echo "ajout ok";
                        $tickets = $ticketManager->getTickets(); 
                        echo $twig->render('listTicket.html.twig', ['tickets'=>$tickets]); //Pour rester sur la même page une fois l'action supprimer.
                    }
                }
                else { // NON c'est que le formulaire n'a pas été valider 
                    $ticketManager = new \Model\ticketManager(); // Création d'un objet
                    $ticket = $ticketManager->getTicket($_GET['id']); // Appel d'une fonction de cet objet
                    //editTicketView($_GET['id']); // Donc vue édition post 
                    echo $twig->render('detailTicket.html.twig', ['ticket'=>$ticket]);
                }

            }
        }

   }
