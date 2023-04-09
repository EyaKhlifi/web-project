<?php

$permis = $_POST['permis'];
$modele = $_POST['modele'];
$e1 = $_POST['e1'];
$e2 = $_POST['e2'];
$e3 = $_POST['e3'];


$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"sw14");

if (!$con) {
   die("error de cnx").mysqli_connect_error($con)   ;
}else{
    $req = "SELECT * FROM testeur WHERE numPermis = '$permis'";
    $res = mysqli_query($con,$req);
    $nb = mysqli_num_rows($res);
    if ($nb==0) {
        echo "<h1>Testeur non inscrit</h1>";
    }else{
        $req2 = "SELECT * FROM evaluation WHERE numPermis = '$permis' and idModele = '$modele'";
        $res2 = mysqli_query($con,$req2);
        $nb2 = mysqli_num_rows($res2);
        if ($nb2!=0) {
            echo "<h1>Vous avez deja teste ce modele</h1>";
        }else{
            $req3 = "INSERT INTO evaluation VALUES ('$permis', '$modele', now(),'$e1', '$e2', '$e3')";
            $res3 = mysqli_query($con,$req3);
            if (mysqli_affected_rows($con)!=0) {
               echo "<h1>Evaluation enregistree avec success</h1>";
            }else{
                echo "<h1>Evaluation echoue</h1>";
            }
        }
    }
}

mysqli_close($con);
?>