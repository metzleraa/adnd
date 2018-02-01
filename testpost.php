<?php

    require 'config.php';
    
    llxHeader();

 $mysqli = new mysqli("gigondas","metzlera","metzlera","metzlera");
    
$sql = "INSERT INTO personnage (nom, genre, race, classe, taille, poid, forc, intelligence, sagesse, dexterite, constitution, charisme) 
VALUES ('".$_POST["nom"]."', '".$_POST["sexe"]."','".$_POST["race"]."','".$_POST["classe"]."','".$_POST["taille"]."','".$_POST["poids"]."',
'".$_POST["force"]."','".$_POST["intelligence"]."','".$_POST["sagesse"]."','".$_POST["dexterite"]."','".$_POST["constitution"]."',
'".$_POST["charisme"]."')";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
    
    $mysqli->close();
    
    echo '<form method="POST" action="listcharacters.php">
    <input type="submit" name="Retour" value="retour" >
    </form>';
    
        llxFooter();
