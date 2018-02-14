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
			<form action="login.php" method="post" class="post__form signin is-active" id="signin">
				<h2>Identifiant: </h2>
				<input type="text" name="username" placeholder="Ex: Bunkermaster" class="p__form__input__id"></br>
				<h2>Mot de passe: </h2>
				<input type="password" name="password" placeholder="Ex: PHP4life" class="p__form__input__pw"></br>
				<h2>Confirmer votre mot de passe: </h2>
				<input type="password" name="repeatpassword" class="p__form__input__pw"></br>
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
				<input type="password" name="repeatpassword" class="p__form__input__pw"></br>
				<input type="submit" value="Confirmer" name="submit" class="p__form__submit">
			</form>


		</section>
		<footer class="footer">
			<p class="footer__text__first">© Multiforme 2018 </p>
			<p class="footer__text">Crée par <a href="https://github.com/ShAd0wInK" class="foo__text__link" target="blank_">Alexandre DELALOY</a>, <a href="https://github.com/Quentin-Aime" class="foo__text__link" target="blank_">Quentin AIME</a>, <a href="https://github.com/Kasdabs" class="foo__text__link" target="blank_">Kassandra AMBROISE</a>, <a href="https://github.com/hichemamb" class="foo__text__link" target="blank_">Hichem AMAR BENSABER</a> et <a href="https://github.com/Fabienmrqs" class="foo__text__link" target="blank_">Fabien MARQUES</a> à <a href="http://hetic.net" class="foo__text__link" target="blank_">HÉTIC</a>.</p>
			<img src="img/logo.svg" alt="logo footer" class="footer__img">
		</footer>
		<div class="h__box__img" style="display: none"></div>
		<div class="s__create__link" style="display: none"></div>
		<div class="s__box__form__submit" style="display: none"></div>
		<div class="h__box__name" style="display: none"></div>
	</body>
	<script src="js/script.js"></script>
    <script src="js/form.js"></script>
</html>




<?php

session_start();

if(isset($_GET['success'])) {
    echo "Inscription terminée";
}


if(isset($_POST['submit']))  //
{
    $username = $_POST['username']; // On stock dans une variable ce qui est saisi dans le champ username.
    $password = $_POST['password'];


    if ((isset($_POST['username']) && !empty($_POST['username'])) && (isset($_POST['password']) && !empty($_POST['password'])))
    {

        require_once "connexion.php";
        $password = md5($password);

        $req = $bdd->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $req->execute( array(
                'username'  =>  $username,
                'password'  =>  $password
            ));
        $count = $req->fetchColumn();
        if($count > 0)
        {
            $_SESSION['username']=$username;
            header("Location: index.php");

        } else echo '<script type="text/javascript">window.alert("Identifiant ou mot de passe incorrect");</script>';

    } else echo '<script type="text/javascript">window.alert("Veuillez saisir tout les champs");</script>';

}

?>
