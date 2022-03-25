<head>
<div class="text">Editer</div>


<?php

    $resultQueryPlante=$mysqli->query("SELECT * FROM  `plantes` ORDER BY `id` DESC ");

    
?>

<table class="styled-table">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>

            <th></th>
            <th></th>
        </tr>
    </thead>
        <tbody>

        <?php
            if ($resultQueryPlante->num_rows >0 ){
                foreach($resultQueryPlante as $rowPlante ) {
        ?>

            <tr>
                <td><?php echo $rowPlante ["nom"]?></td>
                <td><?php echo $rowPlante ["description"]?></td>
                <td><?php echo $rowPlante ["prix"]." €"?></td>
                <td><a href="indexDashboard.php?mod=modifier&id=<?php echo $rowPlante ["id"]; ?>"><i class='bx bx-edit sizeIconXl'></i></a></td>
                <td> <a href="crud.php?action=supprimer&id=<?php echo $rowPlante ["id"]; ?>"><i class='bx bx-trash sizeIconXl'></i></a> </td>
            </tr>
        <?php
                }
            } 
        ?>

            <!-- Bouton editer-->

                <!-- <form method="post" action="crud.php?action=editer"> 

                <label for="">Modification de la plante </label>

                <input  type="text" name="nom" id="">
                <input  type="text" name="description" id="">
                <input  type="int" name="prix" id="">
                <input  type="submit" value="editer">

                </form> -->

            <!-- fin Bouton ajouter-->

            

        </tbody>
</table>

</head>