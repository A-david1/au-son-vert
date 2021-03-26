<!DOCTYPE html>
<html lang="fr">

<?php
$titlePage = 'Contact - Au Son Vert';
$metadescriptionPage = 'Posez toutes vos questions à notre équipe de spécialistes ou faites-nous part de vos remarques pour améliorer le site !';
require ('header.php')
?>

    <h1 class="title-contact">Contactez-nous !</h1>
    <div class="Bloc-container">
            <div class="Bloc"></div>
            <form class="container-form">
                <div class="form-style">
                    <input placeholder="Votre Nom*" type="text" name="name" id="name" required>
                </div>
                <div class="form-style">
                    <input type="text" placeholder="Votre Prénom*" name="surname" id="surname" required>
                </div>
                <div class="form-style">
                    <input type="email" placeholder="Votre email*" name="email" id="email"  required>
                </div>
                <div class="form-style">
                    <textarea placeholder="Votre message*" name="comment" id="comment" title="Quel est votre message ?" class="input-text" required ></textarea>
                </div>
                <div class="form-style">
                <input type="submit" value="Envoyer" id="submit">
                </div>
            </form>
            <div class="Bloc"></div>
    </div>
<script src="form.js"></script>
<?php require("footer.php") ?>


</html>


