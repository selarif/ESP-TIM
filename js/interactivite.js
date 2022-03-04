
/*-------------------------------------------
  Déclencher une animation au défilement
--------------------------------------------- */

// Code emprunté de https://webdesign.tutsplus.com/tutorials/animate-on-scroll-with-javascript--cms-36671

// On sélectionne toutes les sections avec la classe .js-defilement
const elementsAdefiler = document.querySelectorAll(".js-defilement");

const elementInView = (el, dividend = 1) => {
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop <=
    (window.innerHeight || document.documentElement.clientHeight) / dividend
  );
};

const elementOutofView = (el) => {
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop > (window.innerHeight || document.documentElement.clientHeight)
  );
};

// Ajoute la classe .js-defile si le viewport est sur le contenu
const afficherElements = (element) => {
  element.classList.add("js-defile");
};

// Retire la classe .js-defile si le viewport quitte le contenu
const hideScrollElement = (element) => {
  element.classList.remove("js-defile");
};

const handleScrollAnimation = () => {
  elementsAdefiler.forEach((el) => {
    if (elementInView(el, 1.25)) {
      afficherElements(el);
    } else if (elementOutofView(el)) {
      hideScrollElement(el)
    }
  })
}

window.addEventListener("scroll", () => { 
  handleScrollAnimation();
});





/*-------------------------------------------
  Effet de survol 3D
--------------------------------------------- */

// Code emprunté de https://codepen.io/technokami/pen/abojmZa

// On conserve l'id du contenant dans la variable el
let el = document.getElementById('lien-projet');

// Récupère la hauteur et largeur du contenant
const hauteur = el.clientHeight;
const largeur = el.clientWidth;


// Un écouteur du mouvement de la souris pour déclencher la fonction handleMove 
el.addEventListener('mousemove', handleMove);

function handleMove(e) {
  // Récupère la position du curseur par rapport au parent

  // Conserve la position x dans cette variable
  const xVal = e.layerX;

  // Conserve la position y dans cette variable
  const yVal = e.layerY;
  
  // Calcule de la rotation sur l'axe y
  const yRotation = 15 * ((xVal - largeur / 2) / largeur);
  
  // Calcule de la rotation dur l'axe x
  const xRotation = -15 * ((yVal - hauteur / 2) / hauteur);

  // On génère le css
  const string = 'perspective(500px) scale(1.1) rotateX(' + xRotation + 'deg) rotateY(' + yRotation + 'deg)';
  
  // Appliquer les transformations calculées
  el.style.transform = string;
}

el.addEventListener('mouseout', function() {
  el.style.transform = 'perspective(500px) scale(1) rotateX(0) rotateY(0)';
})

el.addEventListener('mousedown', function() {
  el.style.transform = 'perspective(500px) scale(0.9) rotateX(0) rotateY(0)';
})

el.addEventListener('mouseup', function() {
  el.style.transform = 'perspective(500px) scale(1.1) rotateX(0) rotateY(0)';
})


const menu = document.querySelector('.menu-icon');
const conteneurSite = document.querySelector('.site');
menu.addEventListener('click', function() {
  conteneurSite.classList.toggle('actif');
  console.log("ca ecoute")
});
    