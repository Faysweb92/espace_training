<?php

function dbConnexion() {
$connexiondb = null;
try{
$connexionDb = new PDO("mysql:host=localhost;dbname=cour_db","root", "" );



} catch(PDOException $e) {
    $connexionDb = $e;

}

return $connexionDb;
}
