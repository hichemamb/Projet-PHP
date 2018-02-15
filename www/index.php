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
				<a href="login.php" class="h__box__name"><?php


                    session_start();
                    if (isset($_SESSION['username']))
                    {
                        echo $_SESSION['username'];
                    }
                    else
                        echo 'SE CONNECTER';


                    ?></a>
				<img src="img/profil.svg" alt="user profil picture" class="h__box__img">
			</div>
		</header>
		<section class="DaBigBox">
			<section class="friends is-active-v">
				<h2 class="friends__title">Ami(e)s</h2>
				<ul class="friends__list">
					<li class="f__item">
						<img src="img/profil_dark.svg" alt="profil pciture" class="f__item__img">
						<p class="f__item__name">Quentin AIME</p>
					</li>
					<li class="f__item">
						<img src="img/profil_dark.svg" alt="profil pciture" class="f__item__img">
						<p class="f__item__name">Quentin AIME</p>
					</li>
					<li class="f__item">
						<img src="img/profil_dark.svg" alt="profil pciture" class="f__item__img">
						<p class="f__item__name">Quentin AIME</p>
					</li>
					<li class="f__item">
						<img src="img/profil_dark.svg" alt="profil pciture" class="f__item__img">
						<p class="f__item__name">Quentin AIME</p>
					</li>
					<li class="f__item">
						<img src="img/profil_dark.svg" alt="profil pciture" class="f__item__img">
						<p class="f__item__name">Quentin AIME</p>
					</li>
					<li class="f__item">
						<img src="img/profil_dark.svg" alt="profil pciture" class="f__item__img">
						<p class="f__item__name">Quentin AIME</p>
					</li>
					<li class="f__item">
						<img src="img/profil_dark.svg" alt="profil pciture" class="f__item__img">
						<p class="f__item__name">Quentin AIME</p>
					</li>
					<li class="f__item">
						<img src="img/profil_dark.svg" alt="profil pciture" class="f__item__img">
						<p class="f__item__name">Quentin AIME</p>
					</li>
					<li class="f__item">
						<img src="img/profil_dark.svg" alt="profil pciture" class="f__item__img">
						<p class="f__item__name">Quentin AIME</p>
					</li>
					<li class="f__item">
						<img src="img/profil_dark.svg" alt="profil pciture" class="f__item__img">
						<p class="f__item__name">Quentin AIME</p>
					</li>
					<li class="f__item">
						<img src="img/profil_dark.svg" alt="profil pciture" class="f__item__img">
						<p class="f__item__name">Quentin AIME</p>
					</li>
				</ul>
			</section>
			<section class="mainList">
				<nav class="mainList__list">
					<a href="#social" class="mL__list__item mL__social">Social</a>
					<a href="#chat" class="mL__list__item mL__chat">Chat</a>
					<a href="#forum" class="mL__list__item mL__forum">Forum</a>
					<a href="#intranet" class="mL__list__item mL__intranet">Intranet</a>
				</nav>
				<section class="tabs">
					<section id="social" class="tab mL__social is-active">
						<section class="social__overflow">
							<div class="social__post">
								<img src="img/profil_dark.svg" alt="post profil img" class="s__post__img">
								<div class="s__box">
									<h3 class="s__box__title">Le PHP, une histoire d'installation</h3>
									<p class="s__box__user">ImBackEndDesigner</p>
									<p class="social__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum nam quae eaque qui laudantium facere, sapiente aliquid suscipit commodi esse, sint sunt harum alias asperiores excepturi nihil in iure debitis?

									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde totam, sit similique recusandae. Consequatur repudiandae ea, voluptatem asperiores impedit? Sit quibusdam, perspiciatis ipsa? Sed consectetur non maiores ad, doloremque dicta?</p>
									<p class="s__box__link__box"><a href="#" class="s__box__link" target="blank_">http://link.mescouilles</a></p>
									<div class="s__box__buttons">
										<div class="s__box__button__box">
											<div src="img/like.svg" alt="fav button" class="s__box__like"></div>
											<p>0</p>
										</div>
										<!--
										<div class="s__box__button__box">
											<div src="img/fav.svg" alt="fav button" class="s__box__fav"></div>
											<p>0</p>
										</div>
										-->

									</div>
									<h2 class="s__box__form__title">Commentaire: <img src="img/triangle.svg" alt="" class="s__box__form__triangle"></h2>
									
									<div class="comments">
										<div class="comment">
											<h3 class="comment__user">Javashit</h3>
											<p class="comment__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe quos adipisci porro dolor soluta consectetur id aliquam nesciunt quisquam, sequi alias eaque nemo necessitatibus reiciendis. Rem ea, harum possimus voluptatum.</p>
										</div>
										<div class="comment">
											<h3 class="comment__user">Javashit</h3>
											<p class="comment__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe quos adipisci porro dolor soluta consectetur id aliquam nesciunt quisquam, sequi alias eaque nemo necessitatibus reiciendis. Rem ea, harum possimus voluptatum.</p>
										</div>
									</div>
									<form action="" class="s__box__form">
										<input type="text" class="s__box__form__message" placeholder="Ex: Oh wow">
										<input type="submit" value="ENVOYER" class="s__box__form__submit">
									</form>
									
									
								</div>
							</div>
							<div class="social__post">
								<img src="img/profil_dark.svg" alt="post profil img" class="s__post__img">
								<div class="s__box">
									<h3 class="s__box__title">Le PHP, une histoire d'installation</h3>
									<p class="s__box__user">ImBackEndDesigner</p>
									<p class="social__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum nam quae eaque qui laudantium facere, sapiente aliquid suscipit commodi esse, sint sunt harum alias asperiores excepturi nihil in iure debitis?

									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde totam, sit similique recusandae. Consequatur repudiandae ea, voluptatem asperiores impedit? Sit quibusdam, perspiciatis ipsa? Sed consectetur non maiores ad, doloremque dicta?</p>
									<p class="s__box__link__box"><a href="#" class="s__box__link" target="blank_">http://link.mescouilles</a></p>
									<div class="s__box__buttons">
										<div class="s__box__button__box">
											<div src="img/like.svg" alt="fav button" class="s__box__like"></div>
											<p>0</p>
										</div>
										<!--
										<div class="s__box__button__box">
											<div src="img/fav.svg" alt="fav button" class="s__box__fav"></div>
											<p>0</p>
										</div>
										-->

									</div>
									<h2 class="s__box__form__title">Commentaire: <img src="img/triangle.svg" alt="" class="s__box__form__triangle"></h2>
									
									<div class="comments">
										<div class="comment">
											<h3 class="comment__user">Javashit</h3>
											<p class="comment__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe quos adipisci porro dolor soluta consectetur id aliquam nesciunt quisquam, sequi alias eaque nemo necessitatibus reiciendis. Rem ea, harum possimus voluptatum.</p>
										</div>
										<div class="comment">
											<h3 class="comment__user">Javashit</h3>
											<p class="comment__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe quos adipisci porro dolor soluta consectetur id aliquam nesciunt quisquam, sequi alias eaque nemo necessitatibus reiciendis. Rem ea, harum possimus voluptatum.</p>
										</div>
									</div>
									<form action="" class="s__box__form">
										<input type="text" class="s__box__form__message" placeholder="Ex: Oh wow">
										<input type="submit" value="ENVOYER" class="s__box__form__submit">
									</form>
									
									
								</div>
							</div>
							<div class="social__post">
								<img src="img/profil_dark.svg" alt="post profil img" class="s__post__img">
								<div class="s__box">
									<h3 class="s__box__title">Le PHP, une histoire d'installation</h3>
									<p class="s__box__user">ImBackEndDesigner</p>
									<p class="social__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum nam quae eaque qui laudantium facere, sapiente aliquid suscipit commodi esse, sint sunt harum alias asperiores excepturi nihil in iure debitis?

									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde totam, sit similique recusandae. Consequatur repudiandae ea, voluptatem asperiores impedit? Sit quibusdam, perspiciatis ipsa? Sed consectetur non maiores ad, doloremque dicta?</p>
									<p class="s__box__link__box"><a href="#" class="s__box__link" target="blank_">http://link.mescouilles</a></p>
									<div class="s__box__buttons">
										<div class="s__box__button__box">
											<div src="img/like.svg" alt="fav button" class="s__box__like"></div>
											<p>0</p>
										</div>
										<!--
										<div class="s__box__button__box">
											<div src="img/fav.svg" alt="fav button" class="s__box__fav"></div>
											<p>0</p>
										</div>
										-->
									</div>
									<h2 class="s__box__form__title">Commentaire: <img src="img/triangle.svg" alt="" class="s__box__form__triangle"></h2>
									
									<div class="comments">
										<div class="comment">
											<h3 class="comment__user">Javashit</h3>
											<p class="comment__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe quos adipisci porro dolor soluta consectetur id aliquam nesciunt quisquam, sequi alias eaque nemo necessitatibus reiciendis. Rem ea, harum possimus voluptatum.</p>
										</div>
										<div class="comment">
											<h3 class="comment__user">Javashit</h3>
											<p class="comment__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe quos adipisci porro dolor soluta consectetur id aliquam nesciunt quisquam, sequi alias eaque nemo necessitatibus reiciendis. Rem ea, harum possimus voluptatum.</p>
										</div>
									</div>
									<form action="" class="s__box__form">
										<input type="text" class="s__box__form__message" placeholder="Ex: Oh wow">
										<input type="submit" value="ENVOYER" class="s__box__form__submit">
									</form>
									
									
								</div>
							</div>
						</section>
						<section class="social__create">

                                // Here we check if the user is online , if he is online he can post else he can't .
                                <?php if (isset($_SESSION['username']))
                                {
                                echo "<p class=\"s__create__text\">Vous voulez partager une idée ?<a href=\"createpost.php\" class=\"s__create__link\">POSTER</a></p>";
                                }

                                if (!isset($_SESSION['username']))
                                {
                                echo "<p class=\"s__create__text\">Vous voulez partager une idée ?<a href=\"login.php\" class=\"s__create__link\">POSTER</a></p>";
                                }

                                ?>
						</section>
					</section>
					<section id="chat" class="tab mL__chat">
						<div class="tab__wip">
							<h3 class="t__wip__title">Disponible prochainement</h3>
							<img src="img/gear.svg" alt="" class="t__wip__gear">
						</div>
					</section>
					<section id="forum" class="tab mL__forum">
						<div class="tab__wip">
							<h3 class="t__wip__title">Disponible prochainement</h3>
							<img src="img/gear.svg" alt="" class="t__wip__gear">
						</div>
					</section>
					<section id="intranet" class="tab mL__intranet">
						<div class="tab__wip">
							<h3 class="t__wip__title">Disponible prochainement</h3>
							<img src="img/gear.svg" alt="" class="t__wip__gear">
						</div>
					</section>
				</section>
			</section>
			<section class="profil">
				<h2 class="profil__title">Inconnu</h2>
				<ul class="profil__list">

					<a href="infos.php" class="p__list__item">Mes informations</a>
				<!--	
<a href="#" class="p__list__item">Mes favoris</a>
-->
                    <?php

                    if (isset($_SESSION['username']))
                        {
                           echo "<a href='logout.php' class='p__list__item'>Se déconnecter</a>";
                        }

                    if (!isset($_SESSION['username']))
                    {
                        echo " ";
                    }

                    ?>

				</ul>
			</section>
		</section>
		<footer class="footer">
			<p class="footer__text__first">© Multiforme 2018 </p>
			<p class="footer__text">Crée par <a href="https://github.com/ShAd0wInK" class="foo__text__link" target="blank_">Alexandre DELALOY</a>, <a href="https://github.com/Quentin-Aime" class="foo__text__link" target="blank_">Quentin AIME</a>, <a href="https://github.com/Kasdabs" class="foo__text__link" target="blank_">Kassandra AMBROISE</a>, <a href="https://github.com/hichemamb" class="foo__text__link" target="blank_">Hichem AMAR BENSABER</a> et <a href="https://github.com/Fabienmrqs" class="foo__text__link" target="blank_">Fabien MARQUES</a> à <a href="http://hetic.net" class="foo__text__link" target="blank_">HÉTIC</a>.</p>
			<img src="img/logo.svg" alt="logo footer" class="footer__img">
		</footer>
	</body>
	<script src="js/script.js"></script>
</html>