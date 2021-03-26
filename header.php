<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <title><?= $titlePage ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;1,400&display=swap"
          rel="stylesheet">
    <meta name="description" content="<?= $metadescriptionPage ?>">
    <meta name="keywords" content="keywords,here">
    <link rel="shortcut icon" type="image/png" href="https://i.ibb.co/vL5WMrb/shortcuticon.png"/>
</head>
<body>

<header>
    <div class="espace-header" id="espace-header"></div>
    <div class="header">
    <a href="index.php">
        <img src="https://i.ibb.co/M7yQGWV/Logo-text.png" alt="Logo" class="logotype"/></a>
        <ul id="menusimple">
            <li><a class="link-menu-burger" href="index.php">ACCUEIL</a></li>
            <li><a class="link-menu-burger" href="shop.php">BOUTIQUE</a></li>
            <li><a class="link-menu-burger" href="event.php">EVENEMENTS</a></li>
            <li><a class="link-menu-burger" href="team.php">L'EQUIPE</a></li>
            <li><a class="link-menu-burger" href="form.php">CONTACT</a></li>
        </ul>

        <div id="boutonBurger" alt="bouton menu">☰</div>
    </div>


    <ul id="menuBurger">

        <div class="zoom">
            <li id="header-footer"><a class="link-menu-burger" href="index.php">ACCUEIL</a></li>
            <hr class="hr-burger"/>
            <li id="header-footer"><a class="link-menu-burger" href="shop.php">BOUTIQUE</a></li>
            <hr class="hr-burger"/>
            <li id="header-footer"><a class="link-menu-burger" href="event.php">EVENEMENTS</a></li>
            <hr class="hr-burger"/>
            <li id="header-footer"><a class="link-menu-burger" href="team.php">L'EQUIPE</a></li>
            <hr class="hr-burger"/>
            <li id="header-footer"><a class="link-menu-burger" href="form.php">CONTACT</a></li>
            <hr class="hr-burger"/>
        </div>
    </ul>
    <script type="text/javascript" src="header.js"></script>
</header>
