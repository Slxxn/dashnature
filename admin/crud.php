<?php

    include("../config.php") ;

    $redirection= $dir_ws."admin/" ;

    if(isset($_GET["action"])){
        switch ($_GET["action"]) {
            case "ajouter":
               $maRequete = "INSERT INTO `plantes` (`id`, `nom`, `description`, `prix`, `dateins`) VALUES (NULL,
               '".$_POST["nom"]."',
               '".$_POST["description"]."', 
               '".$_POST["prix"]."',  
                CURRENT_TIMESTAMP)" ;
               
               $redirection = $dir_ws."admin/indexDashboard.php?mod=editer"; 
                break;
           

            case "modifier":

                $maRequete = "UPDATE `plantes` SET 
                `nom` =  '".$_POST["nom"]."', 
                `description` = '".$_POST["description"]."', 
                `prix` = '".$_POST["prix"]."' 
                WHERE `plantes`.`id` =".$_GET["id"];     

                $redirection = $dir_ws."admin/indexDashboard.php?mod=editer" ;
                break;
                

                

           case "supprimer":
                $maRequete = "DELETE FROM `plantes` WHERE `plantes`.`id` =".$_GET["id"];

                $redirection = $dir_ws."admin/indexDashboard.php?mod=editer"; 

                break;
            
            
            default: 
              // echo "i n'est ni égal à 2, ni à 1, ni à 0.";
        }
        

     $mysqli->query($maRequete) ; 

     
    }


        // redirection par defaut
     header("location: ".$redirection) ; 
   
    
     
   /*  '".$_POST["description"]."', 
    '".$_POST["prix"]."',  */

?>