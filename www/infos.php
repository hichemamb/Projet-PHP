<?php

require_once "connexion.php";

require_once "./crud.php";

    session_start();
    $tables = ['id', 'username', 'email'];
    $stmt = read_where($bdd, $tables, 'form.users','username', $_SESSION['username']);
    ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="icon" href="img/icon.png">

		<title>Informations personnelles</title>
	</head>
	<body>
		<header class="header">
			<img src="img/title.svg" class="header__title">
			<p class="header__description">Informations personnelles</p>
			<div class="header__box">
				<a href="index.php" class="h__box__cross"></a>
			</div>
		</header>
		<section class="post">
            <?php if (isset($_POST["username"]) === true && empty($_POST["username"]) === false && isset($_POST["pass"]) === true && empty($_POST["pass"]) === false): ?>
    <?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    ?>
<?php endif; ?>

<form method="post" action="edit.php" class="post__form" style="display: flex">
    <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
        <h2>Identifiant: </h2>
        <input type="username" name="username"  class="p__form__input__id" value="<?=$row['username']?>" disabled="disabled"><br>
        <h2>Adresse mail: </h2>
        <input type="email" name="email"  class="p__form__input__mail" value="<?=$row['email']?>" disabled="disabled"> </br>
    <?php endwhile;?>
    <input type="submit" value="editer le profil">
</form>


</section>
<footer class="footer">
    <p class="footer__text__first">© Multiforme 2018 </p>
    <p class="footer__text">Crée par <a href="https://github.com/ShAd0wInK" class="foo__text__link" target="blank_">Alexandre DELALOY</a>, <a href="https://github.com/Quentin-Aime" class="foo__text__link" target="blank_">Quentin AIME</a>, <a href="https://github.com/Kasdabs" class="foo__text__link" target="blank_">Kassandra AMBROISE</a>, <a href="https://github.com/hichemamb" class="foo__text__link" target="blank_">Hichem AMAR BENSABER</a> et <a href="https://github.com/Fabienmrqs" class="foo__text__link" target="blank_">Fabien MARQUES</a> à <a href="http://hetic.net" class="foo__text__link" target="blank_">HÉTIC</a>.</p>
    <img src="img/logo.svg" alt="logo footer" class="footer__img">
</footer>
<div class="h__box__img" style="display: none"></div>
</body>
<script src="js/script.js"></script>
</html>
