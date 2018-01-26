<?php

    require 'config.php';

    llxHeader();
    
    echo'
    <form action="/action_page.php">
    
    <table>
    <tr><td>Nom:</td><td><input type="text" name="nom" value=""></td></tr>
    <tr><td>Sexe:</td><td><input type="text" name="sexe" value=""></td></tr>
    <tr><td>Race:</td><td><input type="text" name="race" value=""></td></tr>
    <tr><td>Classe:</td><td><input type="text" name="classe" value=""></td></tr>
    <tr><td>Taille:</td><td><input type="text" name="taille" value=""></td></tr>
    <tr><td>Poids:</td><td><input type="text" name="poids" value=""></td></tr>
    </table>
    <br>
    <table>
    <tr><td>Force:</td><td><input type="text" name="force" value=""></td></tr>
    <tr><td>Intelligence:</td><td><input type="text" name="intelligence" value=""></td></tr>
    <tr><td>Sagesse:</td><td><input type="text" name="sagesse" value=""></td></tr>
    <tr><td>Dexterité:</td><td><input type="text" name="dexterite" value=""></td></tr>
    <tr><td>Constitution:</td><td><input type="text" name="constitution" value=""></td></tr>
    <tr><td>Charisme:</td><td><input type="text" name="charisme" value=""></td></tr>
    </table>
        <br>
        <br>
        <input type="submit" value="Submit">
    </form> 
    ';
    
    llxFooter();