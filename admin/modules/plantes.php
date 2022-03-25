<?php
    if (isset($_GET["mod"])){

        switch ($_GET["mod"]) {
            case 'editer':
                include('./pages/editer.php') ;
                break;
                
            case 'ajouter':
                include('./pages/ajouter.php') ;
                break;

            case 'modifier':
                include('./pages/modifier.php') ;
                break;
            
            default:
                
            include('./pages/lister.php') ;
                break;
        }//end switch



    }else{
    
        include("./pages/lister.php");
    
    
}//end if mod



?>