<?php
session_start();
$prenom = $_SESSION["firstname"];
$nom = $_SESSION["lastname"];
echo "votre $prenom et $nom";

if (!isset($_SESSION["lastname"])) {
    header("Location: form.php");
    }
    
include "menu.php"
?>
<br>
<a href="logout.php">Déconexion</a>