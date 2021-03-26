<?php require('shopData.php') ?>
<?php require('indexData.php') ?>
<!DOCTYPE html>
<html lang="fr">

<?php
$titlePage = 'Accueil - Au Son Vert';
$metadescriptionPage = 'Au Son Vert, boutique spécialisée dans la vente et la location d\'instruments de musiques ! Retrouvez tous nos événements autour de la musique !';
require('header.php');
require('carroussel.php');
?>

<div class="main-container">


    <div class="selection-products">
        <div><h2 class="row-title title-homepage">Les Nouveautés</h2></div>
        <div class="flex-cards">
            <?php for ($i = 0; $i < 2; $i++): ?>
                <div class="card">
                    <div class="card-header">
                        <img src=<?= $cards[$i]['picture'] ?> alt=<?= $cards[$i]['instrument'] ?>>
                    </div>
                    <div class="card-body-shop">
                        <div class="card-title"><?= $cards[$i]['instrument'] . '<br>' . $cards[$i]['model'] ?></div>
                        <div class="card-price"><?= $cards[$i]['price'] ?></div>
                        <a href="shopDetails.php?key=<?=$i?>"><div class="card-button">ACHETER</div></a>
                    </div>
                </div>
            <?php endfor; ?>


            <div class="card">
                <div class="card-header">
                    <img src=<?= $cards[3]['picture'] ?> alt=<?= $cards[3]['instrument'] ?>>
                </div>
                <div class="card-body-shop">
                    <div class="card-title"><?= $cards[3]['instrument'] . '<br>' . $cards[3]['model'] ?></div>
                    <div class="card-body-price">
                        <div class="card-availability <?= $cards[3]['available'] ? 'green' : 'red' ?>"><?= $cards[3]['available'] ? '✅ Disponible' : '❌ Indisponible' ?></div>
                        <div class="card-price"><?= $cards[3]['price'] ?> /jour</div>
                    </div>
                    <a href="shopDetails.php?key=<?=3?>"><div class="card-button rent-button">LOCATION</div></a>
                </div>
            </div>
        </div>
    </div>

    <section class="testimony">
        <div><h2 class="row-title title-homepage">Témoignages</h2></div>

        <div class="flex-cards">
            <?php foreach ($testimonies as $testimonyData): ?>
                <div class="testimonycard">
                    <div class="testimony-content">
                        <p class="card-text"><?= $testimonyData['message'] ?></p>
                        <p class="card-name"><?= $testimonyData['name'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

</div>

<?php require("footer.php") ?>
</html>

