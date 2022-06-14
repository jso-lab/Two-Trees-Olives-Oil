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
};
