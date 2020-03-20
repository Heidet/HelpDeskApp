<?php namespace Model;
require_once('Manager.php');

class clientManager extends Manager
{
    public function addClient($numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO `clients` (`numeroClient`, `date`, `nom`, `prenom`, `mail`, `ville`, `zip`, `contact`) VALUES ( ?, CURRENT_TIMESTAMP, ?, ?, ?, ?, ?, ?);");
        $affectedLines = $req->execute(array($numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact)); // recupération title content 

        return $affectedLines;
    }

    public function getClient($clientId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM clients WHERE id = ?');
        $req->execute(array($clientId)); // Bindparam
        $client = $req->fetch();
    
        return $client;
    }
}