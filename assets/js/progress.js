window.onload = () => {
	//écouteur d'évènement sur scroll
	window.addEventListener('scroll', () => {
		// calcul de la hauteur "utile" du document
		let hauteur = document.documentElement.scrollHeight - window.innerHeight;

		// récupération de la position verticale
		let position = window.scrollY;

		// récupération de la largeur de la fenêtre
		let largeur = document.documentElement.clientWidth;

		// calcul de la largeur de la barre
		let barre = (position / hauteur) * largeur;

		// modification du css de la barre
		document.getElementById('progress').style.width = barre + 'px';
	});
	// PROPRIETES DU DIAPORAMA
	//variables globales
	let compteur = 0;
	let timer, elements, slides, slideWidth;

	const diapo = document.querySelector('.diapo');
	elements = document.querySelector('.elements');
	slides = Array.from(elements.children);

	//on calcule la largeur du diaporama
	slideWidth = diapo.getBoundingClientRect().width;

	let next = document.querySelector('#nav-droite');
	let prev = document.querySelector('#nav-gauche');

	next.addEventListener('click', slideNext);
	prev.addEventListener('click', slidePrev);

	//Automatiser le diaporama
	timer = setInterval(slideNext, 4000);

	//Gérer le survol de la souris
	diapo.addEventListener('mouseover', stopTimer);
	diapo.addEventListener('mouseout', startTimer);

	//Mise en oeuvre du responsive
	window.addEventListener('resize', () => {
		slideWidth = diapo.getBoundingClientRect().width;
	});

	/**Cette fonction fait défiler vers la droite */
	function slideNext() {
		compteur++;
		if (compteur == slides.length) {
			compteur = 0;
		}
		let decal = -slideWidth * compteur;

		elements.style.transform = `translateX(${decal}px)`;
	}

	/**Cette fonction fait défiler vers la gauche */

	function slidePrev() {
		compteur--;
		if (compteur < 0) {
			compteur = slides.length - 1;
		}
		let decal = -slideWidth * compteur;

		elements.style.transform = `translateX(${decal}px)`;
	}

	function stopTimer() {
		clearInterval(timer);
	}

	function startTimer() {
		timer = setInterval(slideNext, 4000);
	}
};
