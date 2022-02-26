
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