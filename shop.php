<?php require ('shopData.php') ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">

</head>
<body>
<?php require ('header.php') ?>
<div class="main-container">
     <div class="shop-header">
         <h2 class="row-title">BOUTIQUE</h2>
         <div class="flex-buttons">
             <a href="#buy-section" class="button" >ACHETER</a>
             <a href="#rent-section" class="button" id="rent">LOUER</a>
             <a href="#sell-section" class="button" id="sell">VENDRE</a>
         </div>
     </div>

    <section class="shop-section">
        <h2 id="buy-section" class="row-title">ACHAT</h2>
        <div class="flex-cards">
            <?php foreach ($cards as $cardData): ?>
                <?php if ($cardData['status'] === 'achat'): ?>
                    <div class="card">
                        <div class="card-header">
                            <img src=<?=$cardData['picture']?> alt=<?=$cardData['instrument']?>>
                        </div>
                        <div class="card-body">
                            <div class="card-title"><?= $cardData['instrument'] . '<br>' . $cardData['model']?></div>
                            <div class="card-price"><?= $cardData['price']?></div>
                            <div class="card-button">ACHETER</div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="shop-section">
         <h2 id="rent-section" class="row-title">LOCATION</h2>
         <div class="flex-cards">
             <?php foreach ($cards as $cardData): ?>
                 <?php if ($cardData['status'] === 'location'): ?>
                     <div class="card">
                         <div class="card-header">
                             <img src=<?=$cardData['picture']?> alt=<?=$cardData['instrument']?>>
                         </div>
                         <div class="card-body">
                             <div class="card-title"><?= $cardData['instrument'] . '<br>' . $cardData['model']?></div>
                             <div class="card-body-price">
                                 <div class="card-availability <?= $cardData['available'] ? 'green' : 'red'?>"><?= $cardData['available'] ? '✅ Disponible' : '❌ Indisponible'?></div>
                                 <div class="card-price"><?= $cardData['price']?> /jour</div>
                             </div>
                             <div class="card-button rent-button">LOCATION</div>
                         </div>
                     </div>
                 <?php endif; ?>
             <?php endforeach; ?>
         </div>
     </section>
</div>

<div id="scrollUp">
    <a href="#TopPage"><img src="assets/arrow-circle-up.png" alt="Flèche pour remonter en haut de page" class="arrowUp"></a>
</div>
</body>
<script type="text/javascript" src="buttonUp.js"></script>
</html>
