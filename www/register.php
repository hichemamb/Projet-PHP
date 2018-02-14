<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="img/icon.png">

    <title>Connexion</title>
</head>
<body>
<header class="header">
    <img src="img/title.svg" class="header__title">
    <p class="header__description">Connexion</p>
    <div class="header__box">
        <a href="index.php" class="h__box__cross"></a>
    </div>
</header>
<section class="post">
    <nav class="post__tabs">
        <a href="#signin" class="p__tabs__link signin is-active">Se connecter</a>
        <a href="#signup" class="p__tabs__link signup">S'inscrire</a>

    </nav>
    <form action="login.php" method="post" class="post__form signin " id="signin">
        <h2>Identifiant: </h2>
        <input type="text" name="username" placeholder="Ex: Bunkermaster" class="p__form__input__id"></br>
        <h2>Mot de passe: </h2>
        <input type="password" name="password" placeholder="Ex: PHP4life" class="p__form__input__pw"></br>
        <h2>Confirmer votre mot de passe: </h2>
        <input type="password" name="password2" class="p__form__input__pw"></br>
        <input type="submit" value="Confirmer" name="submit" class="p__form__submit">
    </form>
    <form action="register.php" method="post" class="post__form signup is-active" id="signup">
        <h2>Identifiant: </h2>
        <input type="text" name="username" placeholder="Ex: Bunkermaster" class="p__form__input__id"></br>
        <h2>Adresse mail: </h2>
        <input type="email" name="email" placeholder="Ex: maclinux@pc.com" class="p__form__input__mail"></br>
        <h2>Mot de passe: </h2>
        <input type="password" name="password" placeholder="Ex: PHP4life" class="p__form__input__pw"></br>
        <h2>Confirmer votre mot de passe: </h2>
        <input type="password" name="password2" class="p__form__input__pw"></br>
        <input type="submit" value="Confirmer" name="submit" class="p__form__submit">
    </form>


</section>
<footer class="footer">
    <p class="footer__text__first">© Multiforme 2018 </p>
    <p class="footer__text">Crée par <a href="https://github.com/ShAd0wInK" class="foo__text__link">Alexandre DELALOY</a>, <a href="https://github.com/Quentin-Aime" class="foo__text__link">Quentin AIME</a>, <a href="https://github.com/Kasdabs" class="foo__text__link">Kassandra AMBROISE</a>, <a href="https://github.com/hichemamb" class="foo__text__link">Hichem AMAR BENSABER</a> et <a href="https://github.com/Fabienmrqs" class="foo__text__link">Fabien MARQUES</a> à <a href="http://hetic.net" class="foo__text__link">HÉTIC</a>.</p>
    <img src="img/logo.svg" alt="logo footer" class="footer__img">
</footer>
<div class="h__box__img" style="display: none"></div>
</body>
<script src="js/script.js"></script>
<script src="js/form.js"></script>
</html>
<?php


    if(isset($_POST['submit']))  /* Check if the register button is clicked */
    {
        $username = $_POST['username']; /* Here for each variables , we stock what the user wrote in the input */
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $email = $_POST['email'];

        // Check if all the input are not empty
        if ((isset($username)) && !empty($username) && (isset($password)) && !empty($password) && (isset($password2)) && !empty($password2)&& (isset($email)) && !empty($email))
        {
            // Check if the username is less than 4 and more than 12 characters
            if(strlen($username)>4 && strlen($username) <12)

            {
            // Check if the password are the same
            if($password==$password2)
            {
                // Here we securise the password with an algo , it's a password hash to prevent hacking
                $password = md5($password);
                // Here we include " connexion.php " which is the connexion to us data base
                require_once "connexion.php";

                // Here we make a request which check if there is an username or a email in the database which match with those written in the input
                $ver = $bdd->prepare("SELECT * FROM users WHERE username='$username' OR email='$email'");
                $ver->execute();
                $count = $ver->fetchColumn();

                if ($count == 0)
                {

                    $req = $bdd->prepare('INSERT INTO users(id,username,password,email) VALUES(NULL, :username, :password, :email)');
                    $req->execute(array(
                        'username' => $username,
                        'password' => $password,
                        'email' => $email));

                    header("Location: login.php?success");


                } else echo '<script type="text/javascript">window.alert("Le pseudo ou le mail est déja utilisé");</script>';



            } else echo '<script type="text/javascript">window.alert("Les mots de passes ne sont pas identiques");</script>';

            } else echo '<script type="text/javascript">window.alert("Le pseudo doit être compris entre 4 et 12");</script>';

        } else echo '<script type="text/javascript">window.alert("Veuillez remplir tout les champs");</script>';


    }

    ?>
