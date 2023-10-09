<!-- 
Dans cet exercice, vous apprendrez à manipuler les variables globales php.
Veillez à bien lire les instructions présentes en commentaires.

Good luck & happy coding !
-->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Made with ❤️ by HelloDev</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script src="./assets/js/main.js"></script>
</head>

<body>
    <h1 class="text-center py-10">Learn PHP - Step 5</h1>

    <!-- Step 5.1 -->
    <!-- Déclarer une variable globale de votre choix à l'aide de la méthode GLOBALS puis faites un print avec la méthode ECHO.
    -->
    <?php



    ?>

    <!-- Step 5.2 -->
    <!-- Quel est le résultat de l'algorithme ci-dessous ?
    -->
    <?php

    // http://localhost:8000/?name=acs
    echo $_GET['name'];
    // Résultat : 

    ?>

    <!-- Step 5.3 -->
    <!-- Quel est le résultat de l'algorithme ci-dessous ?
    -->
    <?php

    // http://localhost:8000/?name=acs
    $_POST['name'];
    // Résultat : 

    ?>

    <!-- Step 5.4 -->
    <!-- A quoi sert la variable superglobal ci-dessous ?
    -->
    <?php

    $_FILES[''];

    ?>

    <!-- Step 5.5 -->
    <!-- A quoi sert la variable superglobal ci-dessous ?
    -->
    <?php

    $_REQUEST[''];

    ?>

    <!-- Step 5.6 -->
    <!-- A quoi sert la variable superglobal ci-dessous ?
    -->
    <?php

    $_ENV[''];

    ?>

    <!-- Step 5.7 -->
    <!-- Quel est le résultat de l'algorithme ci-dessous ?
    -->
    <?php

    $cookie = setcookie('cookie', 'hello cookie');
    echo $_COOKIE['cookie'];
    // Résultat :

    ?>

    <!-- Step 5.8 -->
    <!-- A quoi sert la variable superglobal ci-dessous ?
    -->
    <?php

    $_SESSION[''];

    ?>

    <!-- Step 5.9 -->
    <!-- Faites un listing des méthodes intéressantes liées à SESSION.
    -->
    <?php



    ?>


    <!-- Step 6 -->
    <!--
    Bravo, vous venez de terminer la manipulation des variables globales PHP ! Ils existent encore pleins d'autres méthodes consultables ici :

    Variables globales : https://www.php.net/manual/en/reserved.variables.php

    Passons à la suite en vous rendant sur ce lien :

    https://github.com/Lazy974/s7

    Made with ❤️ by HelloDev
    -->

</body>

</html>