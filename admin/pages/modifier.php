<head>

<div class="text">Modifier</div>

<?php

    $nom= "";
    $description= "";
    $prix= "";
    if (isset($_GET["id"])) {
        $resultQueryPlante=$mysqli->query("SELECT * FROM  `plantes` WHERE id = ".$_GET["id"]." ORDER BY `id` DESC ");
       
        if ($resultQueryPlante->num_rows > 0 ){
            
            $row = $resultQueryPlante->fetch_assoc();  
            $nom=$row["nom"] ;
            $description=$row["description"] ;
            $prix=$row["prix"] ;
        }        
    }  
?>
            <!-- formulaire editer-->

                <form method="post" action="crud.php?action=modifier&id=<?php echo  $_GET["id"] ?>"> 

                <label for="">Modification de la plante </label>

                <input  type="text" name="nom" id="" value="<?php echo $nom ?>">
                <input  type="text" name="description" value="<?php echo $description ?>">
                <input  type="int" name="prix" value="<?php echo $prix ?>">
                <input  type="submit" value="modifier">

                </form> 

            <!-- fin formulaire ajouter-->
            
     

            

</head>