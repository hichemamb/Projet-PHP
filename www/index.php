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
				<?php require_once './crud.php';
				$conn = connect('members');
				$tables = ['id', 'username'];
				$stmt = read($conn, $tables, 'members.member_table');
				while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
					<li class="f__item">
						<img src="img/profil_dark.svg" alt="profil pciture" class="f__item__img">
						<p class="f__item__name"><?= $row['username'] ?></p>
					</li>
				<?php endwhile;?>
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
								<?php $conn = connect('actu');
								$tables = ['id', 'name', 'link', 'description', 'nb_like', 'nb_fav', 'nb_comments', 'tags', 'comments', 'liked', 'faved', 'date', 'user'];
								$stmt = read($conn, $tables, 'actu.post');
								while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
								<div class="social__post">
									<img src="img/profil_dark.svg" alt="post profil img" class="s__post__img">
									<div class="s__box">
										<h3 class="s__box__title"><?=$row["name"]?></h3>
										<p class="s__box__user"></p>
										<p class="social__description"><?=$row["description"]?></p>
										<p class="s__box__link__box"><a href="#" class="s__box__link" target="blank_"><?=$row["link"]?></a></p>

										<?php if ($row['name'] === $_SESSION['username']) :?>
											<?php $_SESSION['id'] = $row['id']; ?>
											<form action="dodelete.php" method="post">
											   <input type="submit" value="supprimer">
											</form>
										<?php endif; ?>
										<div class="s__box__buttons">
											<div class="s__box__button__box">
												<div src="img/like.svg" alt="fav button" class="s__box__like"></div>
												<p><?=$row["nb_like"]?></p>
											</div>
											<div class="s__box__button__box">
												<div src="img/fav.svg" alt="fav button" class="s__box__fav"></div>
												<p><?=$row["nb_fav"]?></p>
											</div>
										</div>
										<h2 class="s__box__form__title">Commentaire: <img src="img/triangle.svg" alt="" class="s__box__form__triangle"></h2>

										<div class="comments">
											<div class="comment">
												<h3 class="comment__user"><?=$row["user"]?></h3>
												<p class="comment__description"><?=$row["comments"]?></p>
											</div>
<!-- 		a changer quand passage a JSON									<div class="comment">
												<h3 class="comment__user">Javashit</h3>
												<p class="comment__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe quos adipisci porro dolor soluta consectetur id aliquam nesciunt quisquam, sequi alias eaque nemo necessitatibus reiciendis. Rem ea, harum possimus voluptatum.</p>
											</div> -->
										</div>
										<form action="" class="s__box__form">
											<input type="text" class="s__box__form__message" placeholder="Ex: Oh wow">
											<input type="submit" value="ENVOYER" class="s__box__form__submit">
										</form>
									</div>
								</div>
							<?php endwhile;?>
						</section>
						<section class="social__create">
                        <?php if (isset($_SESSION['username'])) // Here we check if the user is online , if he is online he can post else he can't
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
               <h2 class="profil__title">
                   <?php
                   if (isset($_SESSION['username']))
                   {
                       echo $_SESSION['username'];
                   }
                   else
                       echo 'Inconnu';
                   ?>
               </h2>
				<ul class="profil__list">
                    <?php if (isset($_SESSION['username'])) // Here we check if the user is online , if he is online he can post else he can't
                    {
                        echo "<a href=\"infos.php\" class=\"p__list__item\">Mes informations</a>";
                    }
                    if (!isset($_SESSION['username']))
                    {
                        echo "<a href=\"login.php\" class=\"p__list__item\">Mes informations</a>";
                    }
                    ?>
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
