var details_projets = [
  { Titre: "Protector 16", Description: "Dans le cadre du projet de création d'un site internet élégant et épuré, j'ai conçu le nouveau site web de l'entreprise Protector 16, située dans le 16ème arrondissement de Paris. L'objectif était de remplacer l'ancien site par une interface moderne et sophistiquée.<br><br>Le choix des couleurs principales, blanc (#F0F0F0) et noir (#333), apporte une sensation de fraîcheur tout en conservant un aspect visuel et chic. Ces teintes contrastées confèrent au site une esthétique contemporaine et professionnelle.<br><br>Pour renforcer l'attractivité visuelle du site, j\'ai veillé à sélectionner des polices élégantes et facilement lisibles, garantissant ainsi une expérience utilisateur agréable et intuitive.<br><br>En termes de fonctionnalités, le nouveau site propose une navigation fluide et intuitive, permettant aux visiteurs d'accéder rapidement aux informations pertinentes sur les produits et services de Protector 16. Des sections claires et bien structurées facilitent la recherche d'informations et mettent en valeur les éléments essentiels.<br><br>En outre, j'ai intégré des éléments interactifs et dynamiques, tels que des animations subtiles et des effets de transition élégants, pour donner une impression de modernité et de sophistication.<br><br>En somme, le nouveau site internet de Protector 16 incarne l'alliance parfaite entre l'élégance et la fonctionnalité, offrant ainsi aux utilisateurs une expérience en ligne agréable et mémorable.", Lien: "http://protector16.com", lien_affiche: "protector16.com" },
  { Titre: "Portfolio personnel", Description: "Dans le but d'enrichir et de perfectionner mon expérience dans le domaine du développement web, j'ai créé un portfolio personnel mettant en valeur mes compétences et me présentant de manière professionnelle.<br><br>", Lien: "http://sinclair-moulager.fr", lien_affiche: "sinclair-moulager.fr" },
  { Titre: "Hel Geographie", Description: "J'ai réalisé comme projet personnel, un site de jeux geographiques afin de me familiariser avec le format Svg et le javascript.", Lien: "http://hel-geographie.fr", lien_affiche: "hel-geographie.Fr" }
];


function changedetails(nombre) {
  var titre = document.getElementById("projet-titre");
  var desc = document.getElementById("projet-para");
  var link = document.getElementById("projet-link");
  var groupe = document.getElementById("projet-details");
  titre.innerHTML = details_projets[nombre - 1].Titre;
  desc.innerHTML = details_projets[nombre - 1].Description;
  link.innerHTML = details_projets[nombre - 1].lien_affiche;
  link.href = details_projets[nombre - 1].Lien;
  groupe.style.display = "block";
  groupe.scrollIntoView({ block: 'center', behavior: 'smooth', inline: 'nearest' });
}



const circleSlide = document.getElementsByClassName('slide-in');
const styleSheet = document.styleSheets[0];
const spanvalue = document.getElementsByClassName("circle-span-value");
const circles = document.getElementsByClassName('circle-comp');

window.addEventListener('scroll', () => {
  const { scrollTop, clientHeight } = document.documentElement;

  for (let i = 0; i < circleSlide.length; i++) {
    const topElementToTopViewport = circleSlide[i].getBoundingClientRect().top;

    if (scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.75) {
      circleSlide[i].classList.add('active');
    }
  }

  for (let i = 0; i < circles.length; i++) {
    const circle = circles[i];
    const prc = circle.getAttribute('data-value');
    spanvalue[i].innerHTML = prc;

    if (styleSheet) {
      const parentContainer = circle.closest('.container-box');

      if (parentContainer && parentContainer.classList.contains('active')) {
        const keyframesRule = `@keyframes circle-animation-${i} {
          to {
            stroke-dashoffset: ${((100 - prc) * 440) / 100};
          }
        }`;

        styleSheet.insertRule(keyframesRule, styleSheet.cssRules.length);
        circle.style.animation = `circle-animation-${i} 2s forwards`;
      }
    }
  }
});

var creation = [
  { Titre: "Menu vertical", lien: "https://github.com/Alopsis/InclinedChoiceHalfAccordion", videosrc: "./video/2023-09-17_09-47-01.mkv", option: "html,css,js,php" },
];
let crea_affichage = [0];
function makecreation(nombre) {
  let container = document.createElement('div');
  container.classList.add("creation-item");


  let firstchild = document.createElement('div');
  firstchild.classList.add('creation-image');
  let video = document.createElement('video');
  video.style.width = "500px";
  video.style.height = "300px";
  video.controls = true;

  let src = document.createElement('source');
  src.src = creation[nombre].videosrc;
  src.type = "video/ogg";
  video.appendChild(src);
  firstchild.appendChild(video);


  let secondchild = document.createElement('div');
  secondchild.classList.add('creation-titre-container');
  let titre = document.createElement('p');
  titre.classList.add('creation-titre');
  titre.innerHTML = creation[nombre].Titre;
  secondchild.appendChild
  let link = document.createElement('a');
  link.classList.add('creation-button');
  link.href = creation[nombre].lien;
  link.innerHTML = "Voir sur github";
  secondchild.appendChild(titre);
  secondchild.appendChild(link);

  container.appendChild(firstchild);
  container.appendChild(secondchild);

  container.dataset.opts = creation[nombre].option;
  let corp = document.getElementsByClassName("creation-container-galerie")[0].appendChild(container);
  crea_affichage[nombre] = 1;
}


















