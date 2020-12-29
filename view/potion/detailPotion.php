<?php  
    $potion = $data ["potion"];
    $ingredients = $data ["ingredients"];
    $compose = $data ["compose"];
?>  

<a href="?ctrl=potion&method=allPotions">Retour a la liste des potions</a>

<h2>Detail de la potion</h2>

<table>
    <thead>
        <tr>
            <th>Nom de l'ingredient</th>
            <th>Quantite</th>
            <th>Cout</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($ingredients as $data) { ?>
                <tr>
                    <td><?= $data->getNomIngredient()?></td>
                    <td><?= $ingredients->getNomIngredient()?></td>
                    <td>
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="index.php?ctrl=potion&method=deletePotion&id=<?= $potion->getId() ?>">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
         <?php }
    ?>
    </tbody>
</table>
