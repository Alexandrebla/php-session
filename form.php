

<?php
session_start();

if (isset($_SESSION["lastname"])) {
    header("Location: page-connected.php");
    }


if ($_SERVER["REQUEST_METHOD"] === "POST") {
   if ($_POST["login"] == "mmimi" && $_POST["mdp"] == "laal") {
    $_SESSION["firstname"] = "Harbour";
    $_SESSION["lastname"] = "David";
    header("Location: page-connected.php");
} else {
    echo "identifiants incorrects";
} 
}

include "menu.php" 

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="POST">

        <label for="adresse"> Login : </label>
        <input type="text" name="login" id="adresse"><br>
        <br>
        <label for="mot"> Mot de passe : </label>
        <input type="text" name="mdp" id="mot"><br>
        <br>
        <button value="valider" name="boutton">valider</button>
    </form>
</body>
</html>