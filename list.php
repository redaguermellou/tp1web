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
    

    </body>


    <?php
    
$servername = "127.0.0.2:3307";
$username = "root";
$password = "";
$dbname = "atelier1";

$conn = new mysqli($servername, $username, $password, $dbname);


    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET['id'])) {
$id= $_GET["id"];
}
$req5="Select nom,prenom from professeur where ID=$id";

$res5=$con->query($req5);

$rowprof = $res5->fetch_row();

echo "bonjour :".$rowprof[0]." ".$rowprof[1];

$req="Select ID,nom,prenom from ETUDIANT";

$res=$con->query($req);

if($res->num_rows==0){
    echo "aucun etudiant n est afficher";
}


else{
    echo "<form action= \"addnote.php?ID_PROF=$id\" method=\"POST\">";
    echo "<table border=1><tr><th>nom</th><th>prenom</th><th>note</th></tr>";
    while($row = $res->fetch_row()){
        $ID_ET=$row[0];
        echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td>";

        $req2="Select ID,note from note where ID_PROF=$id and ID_ETUDIANT=$ID_ET";
        $res2=$con->query($req2);
        if($res2->num_rows>0){
            $rownote = $res2->fetch_row();
            $note=$rownote[1];
        }else{
            $note="";
        }

        echo "<td><input type=\"number\" name='".$ID_ET."' value='".$note."'/></td>";
        echo "</tr>";

    }
    echo "</table>
    <input type=\"submit\" value=\"enregistrer\" />
    </form>";

}