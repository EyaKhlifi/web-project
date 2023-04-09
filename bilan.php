<?php


$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"sw14");

if (!$con) {
   die("error de cnx").mysqli_connect_error($con)   ;
}else{
    $req = "SELECT M.libelle , AVG(securite) as 'e1', AVG(conduite) as 'e2' ,AVG(confort)  as 'e3', COUNT(E.idModele) as 'nb' FROM evaluation E, modelevoiture M WHERE  (E.idModele = M.idModele ) AND year(dateTest) = year(now()) GROUP BY (E.idModele)";
    $res = mysqli_query($con,$req);
    $nb = mysqli_num_rows($res);
    if ($nb==0) {
        echo "<h1>Aucune evaluation pour l'année en cours</h1>";
    }else{
        echo "<table border='2'>
    <tr>
        <th>Modele</th>
        <th>Securite</th>
        <th>Conduite</th>
        <th>Confort</th>
        <th>Nb tests</th>
    </tr>
        ";
        while ($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>" . $row['libelle'] . "</td>";
            echo "<td>" . $row['e1'] . "</td>";
            echo "<td>" . $row['e2'] . "</td>";
            echo "<td>" . $row['e3'] . "</td>";
            echo "<td>" . $row['nb'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td,th{
        padding:15px;
    }
</style>
<body>
    
</body>
</html>