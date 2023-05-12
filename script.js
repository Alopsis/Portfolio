var details_projets = [
    {Titre: "Protector 16", Description: "Dans le cadre du projet de création d'un site internet élégant et épuré, j'ai conçu le nouveau site web de l'entreprise Protector 16, située dans le 16ème arrondissement de Paris. L'objectif était de remplacer l'ancien site par une interface moderne et sophistiquée.<br><br>Le choix des couleurs principales, blanc (#F0F0F0) et noir (#333), apporte une sensation de fraîcheur tout en conservant un aspect visuel et chic. Ces teintes contrastées confèrent au site une esthétique contemporaine et professionnelle.<br><br>Pour renforcer l'attractivité visuelle du site, j\'ai veillé à sélectionner des polices élégantes et facilement lisibles, garantissant ainsi une expérience utilisateur agréable et intuitive.<br><br>En termes de fonctionnalités, le nouveau site propose une navigation fluide et intuitive, permettant aux visiteurs d'accéder rapidement aux informations pertinentes sur les produits et services de Protector 16. Des sections claires et bien structurées facilitent la recherche d'informations et mettent en valeur les éléments essentiels.<br><br>En outre, j'ai intégré des éléments interactifs et dynamiques, tels que des animations subtiles et des effets de transition élégants, pour donner une impression de modernité et de sophistication.<br><br>En somme, le nouveau site internet de Protector 16 incarne l'alliance parfaite entre l'élégance et la fonctionnalité, offrant ainsi aux utilisateurs une expérience en ligne agréable et mémorable.", Lien: "http://protector16.com" ,lien_affiche: "protector16.com"},
    {Titre: "Portfolio personnel", Description: "Dans le but d'enrichir et de perfectionner mon expérience dans le domaine du développement web, j'ai créé un portfolio personnel mettant en valeur mes compétences et me présentant de manière professionnelle.<br><br>", Lien: "http://sinclair-moulager.fr",lien_affiche:"sinclair-moulager.fr"}
];


function changedetails(nombre){
    var titre = document.getElementById("projet-titre");
    var desc = document.getElementById("projet-para");
    var link = document.getElementById("projet-link");
    var groupe = document.getElementById("projet-details");
    titre.innerHTML = details_projets[nombre-1].Titre;
    desc.innerHTML = details_projets[nombre-1].Description;
    link.innerHTML = details_projets[nombre-1].lien_affiche;
    link.href = details_projets[nombre-1].Lien;
    groupe.style.display = "block";
    groupe.scrollIntoView({		block: 'center',		behavior: 'smooth',		inline: 'nearest'	});	
}