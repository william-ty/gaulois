<?php  
    $potions = $data ["potions"];
?>  

<a href="?ctrl=potion&method=newPotion">Ajouter une potion</a>

<h2>Liste des potions</h2>

<table>
    <thead>
        <tr>
            <th>Potion</th>
            <th>Nombre d'ingredients</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($potions as $potion) { ?>
                <tr>
                    <td><a href="index.php?ctrl=potion&method=detailPotion&id=<?= $potion->getId() ?>"><?= $potion->getNomPotion()  ?></a></td>
                    <td><a href="index.php?ctrl=potion&method=detailPotion&id=<?= $potion->getId() ?>"><?= $potion->getNomPotion()  ?></a></td>
                    <td>
                        <a href="index.php?ctrl=potion&method=editPotion&id=<?= $potion->getId() ?>">
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
