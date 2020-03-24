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
        $req = $db->query("SELECT * FROM `clients`  ORDER BY id DESC");
        //$req->execute(); // Bindparam
        

       return $req;
    }

    /*public function getClients($term)
    {
        
        $db = $this->dbConnect();
        $term = $_GET['term'];
        $req = $db->prepare('SELECT * FROM clients WHERE nom LIKE :term'); // j'effectue ma requête SQL grâce au mot-clé LIKE
        $req->execute(array('term' => '%'.$term.'%'));
        $array = array(); // on créé le tableau
            while($donnee = $req->fetch()) // on effectue une boucle pour obtenir les données
            {
            array_push($array, $donnee['nom']); // et on ajoute celles-ci à notre tableau
            }   
        
        //req->execute(); // Bindparam
        return $array;
    }*/
       
        
}




