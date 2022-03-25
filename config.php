<?php

 //parametrage de ma base de données

    $host="localhost";
    $username="root";
    $password="" ;
    $dataBase="dashboard";

 //connexion a ma base de donnée

    $dir_fs = $_SERVER["DOCUMENT_ROOT"]."/" ;
    $dir_ws = "/" ;

    $mysqli = @new mysqli($host,$username,$password,$dataBase);
            
        if ($mysqli->connect_errno) {
            echo "echec de connexion";
            exit();                       
      
     } 
    /*arret de l'execution du programe*/

?>
