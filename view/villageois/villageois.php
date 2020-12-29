<?php

$villageois = $data["villageois"];

?>

<section id="content-villageois">
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>NOM</th>
                    <th>LIEU</th>
                    <th>SPECIALITE</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($villageois as $v) { ?>
                    <tr>
                        <td><?= $v ?></td>
                        <td><?= $v->getLieu() ?></td>
                        <td><?= $v->getSpecialite() ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>