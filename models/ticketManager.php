<?php namespace Model;
require_once('Manager.php');

class ticketManager extends Manager
{
    public function newTicket($titre, $numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact, $priorite, $categorie, $document, $contenu, $note)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO `tickets` (`titre`, `numeroClient`, `date`, `nom`, `prenom`, `mail`, `ville`, `zip`, `contact`, `priorite`, `categorie`, `document`, `contenu`, `note`) VALUES (?, ?, CURRENT_TIMESTAMP, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
        $affectedLines = $req->execute(array($titre, $numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact, $priorite, $categorie, $document,  $contenu, $note)); // recupération title content 

        return $affectedLines;
    }
    public function editTicket($ticketId, $titre, $numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact, $priorite, $categorie, $document, $contenu, $note)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("UPDATE `tickets` SET  titre = ?, numeroClient = ?, nom = ?, prenom = ?, mail = ?, ville = ?, zip = ?, contact = ?, priorite = ?, categorie = ?, document = ?, contenu = ?, note = ?  WHERE id = ?"); // mettre à jour la table poste ( titre = 1 champs, contenu = 2 ème champs) quand l'id = son ID 
        $affectedLines = $req->execute(array($titre, $numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact, $priorite, $categorie, $document, $contenu, $note, $ticketId)); // recupération title content 
        
        return $affectedLines;
    }

    public function getTickets()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM `tickets` ORDER BY id DESC');

        return $req;
    }

    public function getTicket($ticketId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM `tickets` WHERE id = ?');
        $req->execute(array($ticketId)); // Bindparam
        $ticket = $req->fetch();
    
        return $ticket;
    }
    public function deleteTicket($ticketId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM `tickets` WHERE id = ?');
        $affectedLines = $req->execute(array($ticketId));

        return $affectedLines; 
    }
    
}