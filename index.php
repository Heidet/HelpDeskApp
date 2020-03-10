<?php
session_start(); // démarre le système de sessions. Si le visiteur vient d'arriver sur le site, alors un numéro de session est généré pour lui. 
error_reporting(E_ALL); // reporting des erreur sur la page
ini_set("display_errors", 1);

if ($_GET['action'] == 'addTicket') {
        require_once('controller/backend.php');
        if (isset($_POST['numeroClient']) && isset($_POST['nom'])) { //SI l'action addpost et si on à du contenu dans titre et contenu
            addTicket($_POST['numeroClient'], $_POST['nom']);  //alors insertion post
        }
        else {  // SI NON affichage vu post. 
            createTicketViews();
        }
    }