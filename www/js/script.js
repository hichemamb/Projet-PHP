// SORT TABS ------------------------------------
	var tab = document.querySelectorAll('.mL__list__item');
	var content = document.querySelectorAll('.tab');

	for (var i = 0; i < tab.length; i++) {
		tab[i].addEventListener('click', function() {	
			console.log(this);
			var href = this.getAttribute('href');
			href = href.replace('#', '');
			for (var j = 0; j < tab.length; j++) {
				tab[j].classList.remove('is-active') ;
			}
			this.classList.add('is-active');
			for (var a = 0; a < content.length; a++) {
				if (href === content[a].getAttribute('id')) {
					content[a].classList.add('is-active');
				}
				else {
					content[a].classList.remove('is-active');
				}
			}
		});
	}

// MENU -----------------------------------------
	var imgProfil = document.querySelector('.h__box__img');
	var friends = document.querySelector('.friends');
	var profil = document.querySelector('.profil');
	var profilList = document.querySelector('.profil__list');

	imgProfil.addEventListener('click', function() {
		friends.classList.toggle('is-active-v');
		profil.classList.toggle('is-active-v');
		profilList.classList.toggle('is-active-w');
	});

// BUTTONS --------------------------------------
	var like = document.querySelectorAll('.s__box__like');
		fav = document.querySelectorAll('.s__box__fav');
		
		for (let i = 0; i < like.length; i++) {
			like[i].addEventListener('click', function() {
				like[i].classList.toggle('like__full');
			});
		}
		for (let i = 0; i < fav.length; i++) {
			fav[i].addEventListener('click', function() {
				fav[i].classList.toggle('fav__full');
			});
		}

// COMMENTS -------------------------------------
	var triangle = document.querySelectorAll('.s__box__form__triangle');
		comment = document.querySelectorAll('.s__box__form');
		comments = document.querySelectorAll('.comments')
		for (let i = 0; i < triangle.length; i++) {
			triangle[i].addEventListener('click', function() {
				for (var j = 0; j < triangle.length; j++) {
					comment[j].classList.add('is-active');
					comments[j].classList.add('is-active');
					triangle[j].classList.add('triangle_change');
					if ( j !== i ) {
						comment[j].classList.toggle('is-active');
						comments[j].classList.toggle('is-active');
						triangle[j].classList.toggle('triangle_change');
					}
				}
			});
		}
 
// LOGIN ----------------------------------------
	var tabsLink = document.querySelectorAll('.p__tabs__link');
	var postForm = document.querySelectorAll('.post__form');

	for (var i = 0; i < tabsLink.length; i++) {
		tabsLink[i].addEventListener('click', function() {	
			console.log(this);
			var href = this.getAttribute('href');
			href = href.replace('#', '');
			for (var j = 0; j < tabsLink.length; j++) {
				tabsLink[j].classList.remove('is-active') ;
			}
			this.classList.add('is-active');
			for (var a = 0; a < postForm.length; a++) {
				if (href === postForm[a].getAttribute('id')) {
					postForm[a].classList.add('is-active');
				}
				else {
					postForm[a].classList.remove('is-active');
				}
			}
		});
	}

// NEEDTOCONNECT --------------------------------

	var postLink = document.querySelector('.s__create__link');
		connectLink = document.querySelector('.h__box__name');
		infosLink = document.querySelector('.p__list__item__infos');
		commentLink = document.querySelectorAll('.s__box__form__submit')
	
 	
 		if (  connectLink.textContent === 'SE CONNECTER') {
 			postLink.setAttribute('href', 'login.php');
 			infosLink.setAttribute('href', 'login.php');
 			for (var i = 0; i < commentLink.length; i++) {
 				commentLink[i].addEventListener('click', function() {
 					connectLink.click();
 				});
 			};
 			
 			
	 	}
		






