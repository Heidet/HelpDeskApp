<?php namespace Controller;

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
            echo $twig->render('listTicket.html.twig');; //Pour rester sur la même page une fois l'action supprimer.
        }
    }

}