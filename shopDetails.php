<?php
require ("shopData.php");
$newKey = intval($_GET['key']);
$titlePage = $cards[$newKey]['instrument'] . ' - Au Son Vert';
$metadescriptionPage = 'Cette page vous permet de commander l\'instrument ' . $cards[$newKey]['instrument'] ;
?>
<!DOCTYPE html>
<html lang="fr">
    <?php require ("header.php")?>

    <section class="main-container shop-details-section">
        <h2><?=$cards[$newKey]['instrument']?></h2>
        <h3>Modèle : <?=$cards[$newKey]['model']?></h3>
        <img src="<?=$cards[$newKey]['picture']?>" alt="instru">
        <h4 class="shop-details-price">----- <?=$cards[$newKey]['price']?> <?=$cards[$newKey]['status'] === 'location' ? '/ jour' : ''?>-----</h4>
        <?php if ($cards[$newKey]['status'] === 'location'): ?>
            <div class="shop-details-availability <?= $cards[$newKey]['available'] ? 'green' : 'red'?>"><?= $cards[$newKey]['available'] ? '✅ Disponible' : '❌ Indisponible'?></div>
        <?php endif; ?>
        <a href="successCommand.php?key=<?=$newKey?>"><div class="card-button <?=$cards[$newKey]['status'] === 'achat' ? 'buy-button' : 'rent-button'?>">COMMANDER</div></a>
        <div class="shop-details-description">
            <h5>Réparations effectuées : </h5>
            <p><?=$cards[$newKey]['description']?></p>
        </div>
    </section>

    <?php require("footer.php") ?>
</html>
