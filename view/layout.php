<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/02b62e5e29.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <title><?= $result["titrePage"] ?></title>
</head>

<body>

    <section id="nav">
        <div class="container">
            <nav class="nav">
                <ul>
                    <li><a href="?ctrl=villageois&method=allVillageois">Villageois</a></li>
                    <li><a href="?ctrl=potion&method=allPotions">Potion</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <section id="main">
        <main>
            <div id="page">
                <?= $page ?>
            </div>
        </main>
    </section>

</body>

</html>