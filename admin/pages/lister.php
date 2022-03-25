<div class="text">Lister</div>

<?php

    $resultQueryPlante=$mysqli->query("SELECT * FROM  `plantes` ORDER BY `id`DESC");

?>

<table class="styled-table">

    <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
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
                
            </tr>
        <?php
                }
            }                
        ?>
        <!-- and so on... -->
    </tbody>
</table>