<?php
require ('shopData.php');
$keyCommand = intval($_GET['key']);
$titlePage = 'Commande validée de ' . $cards[$keyCommand]['instrument'];
$metadescriptionPage = 'Merci de votre achat pour l\'instrument : ' . $cards[$keyCommand]['instrument'] ;
?>
<!DOCTYPE html>
<html lang="fr">
    <?php require ('header.php')?>
    <!--<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
    </head>-->

    <?php if ($cards[$keyCommand]['available']): ?>
        <div class="main-container success-command-section">
            <h2>Notre équipe vous remercie !</h2>

            <h3>Nous vous informons que vous avez commandé avec succès  cet instrument :</h3>
            <h3 class="success-command-nom-instru"> <?=$cards[$keyCommand]['instrument']?></h3>
            <h4 class="success-command-information">Il arrivera chez vous dans les 24h (pour tout instrument supérieur à 98kg veuillez dégager suffisamment d'espace jusqu'à votre domicile pour que notre équipe puisse manipuler la grue ...)</h4>
        </div>
    <?php else: ?>
        <div class="main-container success-command-section">
            <h2 class="unsuccess">Désolé !</h2>

            <h3>Nous vous informons que l'article <span class="success-command-nom-instru unsuccess"><?=$cards[$keyCommand]['instrument']?></span> n'est pas disponible à la location</h3>
            <h3>Veuillez <a href="form.php">contacter</a> notre équipe afin de connaître sa prochaine date de disponibilité</h3>

        </div>
    <?php endif; ?>
    <?php require("footer.php") ?>

</html>