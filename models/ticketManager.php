<?php
require_once('Manager.php');
class ticketManager extends Manager
{
    public function addTicket($numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact, $priorite, $categorie, $document, $contenu)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO `tickets` (`id`, `numeroClient`, `date`, `nom`, `prenom`, `mail`, `ville`, `zip`, `contact`, `priorite`, `categorie`, `document`, `contenu`) VALUES (NULL, ?, CURRENT_TIMESTAMP, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? );");
        $affectedLines = $req->execute(array($numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact, $priorite, $categorie, $document, $contenu)); // recupération title content 

        return $affectedLines;
    }

    public function getTickets()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM tickets ORDER BY id DESC');

        return $req;
    }

    public function getTicket($ticketId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM tickets WHERE id = ?');
        $req->execute(array($ticketId)); // Bindparam
        $ticket = $req->fetch();

        return $ticket;
    }
    /**public function deleteTicket($ticketId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM tickets WHERE id = ?');
        $affectedLines = $req->execute(array($postId));

        return $affectedLines; 
    }**/
    
    public function modificationTicket($numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact, $priorite, $categorie, $document, $contenu, $ticketId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("UPDATE tickets SET numeroClient = ?, nom = ?, prenom = ?, mail = ?, ville = ?, zip = ?, contact = ?, priorite = ?, categorie = ?, document = ?, contenu = ?  WHERE id = ?"); // mettre à jour la table poste ( titre = 1 champs, contenu = 2 ème champs) quand l'id = son ID 
        $affectedLines = $req->execute(array($numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact, $priorite, $categorie, $document, $contenu, $ticketId)); // recupération title content 

        return $affectedLines;
    }
}