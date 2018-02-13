<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="icon" href="img/icon.png">

		<title>Multiforme, votre plateforme multifonctionelle</title>
	</head>
	<body>
		<header class="header">
			<img src="img/title.svg" class="header__title">
			<p class="header__description">Votre plateforme multifonction</p>
			<div class="header__box">
				<a href="index.php" class="h__box__cross"></a>
			</div>
		</header>
		<section class="post">
			<form action="" class="post__form" style="display: flex">
				<h2 class="p__form__title">Titre :</h2>
				<input type="text" class="p__form__input__title" placeholder="Ex: Mon super titre">
				<h2 class="p__form__description">Description :</h2>
				<input type="text" class="p__form__input__description" placeholder="Ex: Ma super description">
				<h2 class="p__form__description">Lien :</h2>
				<input type="text" class="p__form__input__lien" placeholder="Ex: Mon super lien">
				<h2 class="p__form__tags">Tags :</h2>
				<div class="p__form__box">
					<input type="text" class="p__form__input__tags" placeholder="Ex: PHP, Hagrid">
					<input type="submit" value="VALIDER" class="p__form__submit">
				</div>
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
</html>