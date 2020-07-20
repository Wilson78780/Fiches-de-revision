
/**
*Anime un titre avec un effet mot par mot
*
* @param {string} selector
*
**/

function animatetitle (selector) { 

	// récupère la div/l'élément avec comme nom 'selector'
	const title = document.querySelector(selector)

	// = ca veut que ca prends la forme de ; == c'est pour un test afin de savoir s'ils sont égaux.
	//Si (titre est égal nul donc qu'il n'existe pas on rentre dans cette partie du code)

	if (title == null) {

		//Donc si il n'existe pas ca affiche d'erreur dans la console ; le message impossible de trouver l'élément + la valeur qu'on veut récupérer.
		console.error('impossible de trouver l\'element' + selector)
		
		//return signifie que la fonction se termine.
		return

	}
		//Log c'est pour afficher un message dans la console
	else console.log(selector)


	//on construit un tableau contenent la nouvelle structure
	// title est la div qui contient le titre,
	// children va être un tableau des fils de la div title

	// title.childNodes renvoit tout les fils de title
	// Array.from() crée un tableau de ces éléments
	const children =  Array.from(title.childNodes)

	Array.from(title.querySelectorAll('span span')).forEach((span, k) => {
		span.style.animationDelay = (k * .1) + 's'
	})

//on utilise le tableau pour les injecter les elements dans title


}

animatetitle('.title');



