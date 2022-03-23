<?php

    include("config.php");  

    if (isset($_GET["action"])){
         switch($_GET["action"]){

            case  "ajouter": 
             $maRequette="INSERT INTO `dashboard` (`id`,`nom`,`description`) VALUES (NULL,'".$_POST["nom"]."','".$_POST["description"]."')";
             break;
            
            case "editer":
             $maRequette= "UPDATE `task` SET `etat` = 'o' WHERE `task`.`id`=".$_GET["id"];
             break;

            case "supprimer":
             $maRequette="delete from task where id=".$_GET["id"];
             break;
         }
         if($mysqli->query($maRequette)){
            //je fais une redirection
              header('Location:'.$dir_ws); 
            }
    }else{

      //redirection par défaut

      header("location:  ".$dir_ws) ;
    }

?>