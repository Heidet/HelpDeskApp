<?php
require_once('Manager.php');
class ticketManager extends Manager
{
    public function addTicket($titre, $numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact, $priorite, $categorie, $document, $contenu)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO `tickets` (`numeroClient`, `date`, `nom`, `prenom`, `mail`, `ville`, `zip`, `contact`, `priorite`, `categorie`, `document`, `contenu`) VALUES (NULL, ?, CURRENT_TIMESTAMP, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? );");
        $affectedLines = $req->execute(array($titre, $numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact, $priorite, $categorie, $document, $contenu)); // recupération title content 

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
}