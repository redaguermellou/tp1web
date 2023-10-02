<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>tp
        
    </title>
</head>
<body>
    <section class="header">
        <h1>ibn ghazala</h1>
        <a href="index.html" class="btn-bgstroke" onclick="showElement()">home</a>
        <a href="/list.html" class="btn-bgstroke">list</a>
        <a href="add.php" class="btn-bgstroke">add</a>
        <a  href="contact.php" class="btn-bgstroke">contact</a>
    </section>

    <form action="" method="POST">
        <input type="text" name="nom" placeholder="entrer le nom">
        <input type="text" name="prenom" placeholder="entrer le prenom">
        <input type="email" name="email" placeholder="entrer votre mail">
        <input type="text" name="note" placeholder="entrer votre noted">
        <input type="submit" name="submit" placeholder="enregistrer">
    </form>
<?php

if(isset($_POST['submit'])){
    
    $servername = "127.0.0.2:3307";
$username = "root";
$password = "";
$dbname = "atelier1";

$conn = new mysqli($servername, $username, $password, $dbname);


    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $req2="INSERT INTO `etudiant` (`nom`, `prenom`, `email`, `note`) VALUES ( '".$_POST['nom']."', '".$_POST['prenom']."', '".$_POST['email']."', '".$_POST['note']."')";
    $res2=$con->query($req2);
    if($res2){
        echo 'Un etudiant est bien ajouter';
    }
}
?>
</body>
</html>