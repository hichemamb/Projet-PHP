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
    <form action="login.php" method="post" class="post__form signin is-active " id="signin">
        <h2>Identifiant: </h2>
        <input type="text" name="username" placeholder="Ex: Bunkermaster" class="p__form__input__id"></br>
        <h2>Mot de passe: </h2>
        <input type="password" name="password" placeholder="Ex: PHP4life" class="p__form__input__pw"></br>
        <h2>Confirmer votre mot de passe: </h2>
        <input type="password" name="password2" class="p__form__input__pw"></br>
        <input type="submit" value="Confirmer" name="submit" class="p__form__submit">
    </form>
    <form action="register.php" method="post" class="post__form signup" id="signup">
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





// Here we check if the registration as done by getting the url of the header we did in the register part
if(isset($_GET['success'])) {
   echo '<script type="text/javascript">window.alert("Inscription terminée , vous pouvez vous connectez");</script>';
}


if(isset($_POST['submit']))  // If the connexion button is clicked then we can enter in the condition
{
    $username = $_POST['username']; // Here for each variables , we stock what the user wrote in the input
    $password = $_POST['password'];

    // Check if all the input are not empty
    if ((isset($username)) && !empty($username) && (isset($password)) && !empty($password))
    {
        // Here we include " connexion.php " which is the connexion to us data base on which we use a try / catch
        require_once "connexion.php";

        $password = sha1($password);

        /* Here we make a request which checks if there is a username which match with him password.
           In order, to do it we use the concept of prepared request , which is like a compiled model on which we can adapt by using variables for parameters .
         */
        $req = $bdd->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $req->execute( array(
                'username'  =>  $username,
                'password'  =>  $password
            ));
        $count = $req->fetchColumn(); /* Here , if the row number is superior to 0 , it means that's there is a username and a password who match in the database , so we can enter in the condition , and the user will be log by using $_SESSION to start it*/
        if($count > 0)
        {
            // Here we start a session , when the user will be log , the session will start
            session_start();
            $_SESSION['username']=$username;  // On indique que la session active est celle que l'utilisateur à taper
            header("Location: index.php"); // Redirection to index

        } else echo '<script type="text/javascript">window.alert("Identifiant ou mot de passe incorrect");</script>';

    } else echo '<script type="text/javascript">window.alert("Veuillez saisir tout les champs");</script>';

}

?>
