<?php

$permis = $_POST['permis'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$genre = $_POST['genre'];

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"sw14");

if (!$con) {
   die("error de cnx").mysqli_connect_error($con)   ;
}else{
    $req = "SELECT * FROM testeur WHERE numPermis = '$permis'";
    $res = mysqli_query($con,$req);
    $nb = mysqli_num_rows($res);
    if ($nb!=0) {
        echo "<h1>Numero de permis deja existant</h1>";
    }else{
        $req2 = "INSERT INTO testeur VALUES ('$permis', '$nom', '$prenom', '$genre')";
        $res2 = mysqli_query($con,$req2);
        if (mysqli_affected_rows($con)!=0) {
           echo "<h1>Enregistrement fait avec succes</h1>";
        }else{
            echo "<h1>Enregistrement echoue</h1>";
        }
    }
}

mysqli_close($con);
?>