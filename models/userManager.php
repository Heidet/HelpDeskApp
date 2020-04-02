<?php namespace Model;
require_once('Manager.php');

class userManager extends Manager
{
    public function userConnexion($username, $password)
    {
        $db = $this->dbConnect();
        $connect = $db->prepare('SELECT * FROM users WHERE username = ? AND hash = ?'); // selectionner tout les utilisateur et verifier 
        $hash = hash('sha256', $password);
        $connect->execute(array($username, $hash)); // execute la requete SQL préparer avec passage paramétre par tableau au lieu d'utiliser des bindparam
        $resultat = $connect->fetch();
        
        return $resultat; // retourner uniquement le 1er champs. 
    }
    public function addUser($username, $password)
    {
            $db = $this->dbConnect();
            $req = $db->prepare('INSERT INTO users (`username`, `hash`) VALUES ( ?, ? ) ');
            $hash = hash('sha256', $password);
            $affectedLines= $req->execute(array($username, $hash));
               
            return $affectedLines;
    }

    public function deleteUser($userId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM `users` WHERE id = ?');
        $affectedLines = $req->execute(array($userId));

        return $affectedLines; 
    }

    public function getUsers()
    {
        $db = $this->dbConnect();
        $req = $db->query("SELECT * FROM `users` ORDER BY id DESC");
        //$req->execute(); // Bindparam

        return $req;
    }
}
