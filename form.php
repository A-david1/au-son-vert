<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Contact</title>
  <meta name="author" content="Team AU SON VERT">
  <meta name="description" content="Contactez-nous grâce à ce formulaire de contact">
  <meta name="keywords" content="Contact, Message, Aide, Requête">
  <link rel="stylesheet" href="styles.css" type="text/css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
  </head>
  <?php require('header.php')?>
  <body>
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
  </body>
  <script src="form.js"></script>
</html>


