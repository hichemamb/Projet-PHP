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


// LOGIN
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
