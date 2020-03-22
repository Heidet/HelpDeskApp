<?php namespace Model;
require_once('Manager.php');

class clientManager extends Manager
{
    public function addClient($numeroClient, $nom, $prenom, $mail, $ville, $zip, $contact)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO `clients` (`nom`,  `date`, `prenom`, `mail`, `ville`, `zip`, `contact`) VALUES ( ?, CURRENT_TIMESTAMP, ?, ?, ?, ?, ?);");
        $affectedLines = $req->execute(array($nom, $prenom, $mail, $ville, $zip, $contact)); // recupération title content 

        return $affectedLines;
    }

    public function getClients()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM clients ORDER BY id DESC ');
        $req->execute(array()); // Bindparam
       

        return $req;
    }
}