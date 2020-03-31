<?php namespace Model;
require_once('Manager.php');

class connectManager extends Manager
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
}
