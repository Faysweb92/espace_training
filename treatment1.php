<?php
session_start();
require_once("data_base.php");
if(isset($_POST['inscription'])) {
// recup donnée
$email = htmlspecialchars($_POST['email']);
$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp = htmlspecialchars($_POST['mdp']);
$confirmation = htmlspecialchars($_POST['confirmation']);
//crypter le mot de passe hasher
$mdpCrypt = password_hash($mdp, PASSWORD_DEFAULT );
// echo "<pre>";
// print_r($_FILES);
// echo "<pre>";
// recperer le nom de l'image
$imageName = $_FILES['fichier']['name'];
// recuperer la copy temporaire de l'image
$tmpName = $_FILES['fichier']['tmp_name'];
$destination = $_SERVER['DOCUMENT_ROOT']."/espace_training/img/".$imageName;
// echo $destination;
move_uploaded_file($tmpName, $destination);


//il faut se connecter a la base de donnees
$db = dbConnexion(); // permet d'établir la connexion avec la bd

// var_dump($db); verifier connextion

// preparer la requete
$request = $db->prepare("INSERT INTO espace (email,pseudo,mdp,profil_img) VALUES (?,?,?,?)");

//execution de la requete
try{
$request->execute(array($email,$pseudo,$mdpCrypt,$imageName));
} catch(PDOexception $e) {

    echo $e-> getMessage(); //afficher l'erreur sql genere
}

}

// pour la connection
if(isset($_POST['connexion'])){
    $pseudo = $_POST['pseudo'];
    $mdp= $_POST['mdp'];
    //etablir la connexion avec la bd
    $connect= dbConnexion();
    //preparer la requete
    $connexionRequest = $connect-> prepare("SELECT*FROM espace WHERE pseudo = ?");

    $connexionRequest->execute(array($pseudo));

    $utilisateur = $connexionRequest -> fetch();//covertir le resultat de la requete en tableau pour le manipuler facilement
    if(empty($utilisateur)){
        echo "Utilisateur inconnu...";
    }else{ // sinon
    //on verifie le mot de passe
        if(password_verify($mdp, $utilisateur ['mdp'])){
            // echo "connexion reussie";
            $_SESSION["id"] = $utilisateur['id_membre'];
            $_SESSION["pseudo"] = $utilisateur['pseudo'];
            $_SESSION["img"] = $utilisateur['profil_img'];

header("location: accueil.php");

        } else {
        echo"mot de passe incorrect";

        }

    }
}