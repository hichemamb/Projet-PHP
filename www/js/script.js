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

	imgProfil.addEventListener('click', function() {
		friends.classList.toggle('is-active-v');
		profil.classList.toggle('is-active-v');
	});

