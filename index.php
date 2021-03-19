<?php require ('shopData.php') ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Accueil - Au Son Vert</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link
            rel="shortcut icon"
            type="image/png"
            href="https://i.ibb.co/vL5WMrb/shortcuticon.png"
    />
    <script type="text/javascript" src="buttonUp.js"></script>
</head>

<body>

<a name="TopPage"></a>
<?php require('header.php')?>
<a name="TopPage"></a>
<?php require('carroussel.php')?>

<div class="main-container">

    <div class="selection-products">
        <div><h2 class="row-title title-homepage">Les Nouveautés</h2></div>
        <div class="flex-cards">
            <div class="card">
                <div class="card-header">
                    <img src=<?= $cards[0]['picture']?> alt=<?=$cards[0]['instrument']?>>
                </div>
                <div class="card-body">
                    <div class="card-title"><?= $cards[0]['instrument'] . '<br>' . $cards[0]['model']?></div>
                    <div class="card-price"><?= $cards[0]['price']?></div>
                    <div class="card-button">ACHETER</div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <img src=<?= $cards[1]['picture']?> alt=<?=$cards[1]['instrument']?>>
                </div>
                <div class="card-body">
                    <div class="card-title"><?= $cards[1]['instrument'] . '<br>' . $cards[1]['model']?></div>
                    <div class="card-price"><?= $cards[1]['price']?></div>
                    <div class="card-button">ACHETER</div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <img src=<?= $cards[3]['picture']?> alt=<?= $cards[3]['instrument']?>>
                </div>
                <div class="card-body">
                    <div class="card-title"><?= $cards[3]['instrument'] . '<br>' . $cards[3]['model']?></div>
                    <div class="card-body-price">
                        <div class="card-availability <?= $cards[3]['available'] ? 'green' : 'red'?>"><?= $cards[3]['available'] ? '✅ Disponible' : '❌ Indisponible'?></div>
                        <div class="card-price"><?= $cards[3]['price']?> /jour</div>
                    </div>
                    <div class="card-button rent-button">LOCATION</div>
                </div>
            </div>
        </div>
    </div>

    <section class="testimony">
        <div><h2 class="row-title title-homepage">Témoignages</h2></div>

        <div class="flex-cards">
            <div class="testimonycard">
                <div class="testimony-content">
                    <p class="card-text">Lodo porta a sit amet nulla. Ut dapibus accumsan erat, vitae imperdiet neque. Donec mi lorem, efficitur ut erat vitae, posuere interdum nisl. Aliquam non lacinia nisl, a dapibus diam.</p>
                    <p class="card-name">Anna</p>
                </div>
            </div>

            <div class="testimonycard">
                <div class="testimony-content">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus congue scelerisque varius. Aliquam non lacinia nisl, a dapibus diam.</p>
                    <p class="card-name">Guillaume</p>
                </div>
            </div>

            <div class="testimonycard">
                <div class="testimony-content">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.isl, a dapibus diam.</p>
                    <p class="card-name">Quentin</p>
                </div>
            </div>

        </div>
    </section>
</div>
<div id="scrollUp">
    <a href="#TopPage"><img src="assets/arrow-circle-up.png" alt="Flèche pour remonter en haut de page" class="arrowUp"></a>
</div>

</body>
</html>

