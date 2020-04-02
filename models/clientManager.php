<?php namespace Model;
require_once('Manager.php');

class clientManager extends Manager
{
    public function newClient($nom, $prenom, $mail, $ville, $zip, $contact)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO `clients` (`nom`,  `date`, `prenom`, `mail`, `ville`, `zip`, `contact`) VALUES ( ?, CURRENT_TIMESTAMP, ?, ?, ?, ?, ?);");
        $affectedLines = $req->execute(array($nom, $prenom, $mail, $ville, $zip, $contact)); // recupération title content 

        return $affectedLines;
    }

    public function getClients()
    {
        $db = $this->dbConnect();
        $req = $db->query("SELECT * FROM `clients`  ORDER BY id DESC");
        //$req->execute(); // Bindparam
        

       return $req;
    }

    public function searchClients($term)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM clients WHERE nom LIKE ? ORDER BY id DESC LIMIT 0, 5 '); // j'effectue ma requête SQL grâce au mot-clé LIKE
        $req->execute(array('%'.$term.'%'));
        
        return $req;
    }
    public function deleteClient($clientId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM `clients` WHERE id = ?');
        $affectedLines = $req->execute(array($clientId));

        return $affectedLines; 
    }
       
}




