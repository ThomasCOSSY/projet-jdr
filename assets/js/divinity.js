// Je créé un tableau d'objets dans divinityArray
const divinityArray = [
    {
        "name": "Athanor l'esprit du feu",
        "img" : "divinity/athanor.png",
        "passif": "+ 1 en critique",
        "effect1": "Giga Explosion 2D20 sur les ennemis visibles",
        "effect2": "Dégâts doublés pendant un tour (allier compris)",
        "oufball": "Tir Feu tout puissant puissance 20"
    },
    {
        "name": "Dryade l’esprit de la Nature",
        "img" : "divinity/dryade.png",
        "passif": "+ 2 PM",
        "effect1": "Régénération Full vie pour le groupe",
        "effect2": "Résurrection d’une cible",
        "oufball": "Ronce empeche les mouvements de l’équipe ennemi ce tour"
    },
    {
        "name": "Frozen l’esprit de la Glace",
        "img" : "divinity/frozen.png",
        "passif": " 2 en Int",
        "effect1": "Ere glaciaire gèle les ennemis pendant 2 tours",
        "effect2": "Tempête de glace 2D20 sur les ennemis visibles)",
        "oufball": "Tir Blizzard de la vouivre puissance 20"
    },
    {
        "name": "Gnome l’esprit de la Terre",
        "img" : "divinity/gnome.png",
        "passif": "+ 1 en CA",
        "effect1": "Corps de diamant groupe invincible pendant 2 tours",
        "effect2": "Avalanche brise l’armure des ennemis visibles",
        "oufball": "la Muraille Infinie bloque un tir puissance 20"
    },
    {
        "name": "Lumina l’esprit de la Lumière",
        "img" : "divinity/lumina.png",
        "passif": "immunité à la diminution",
        "effect1": "Aveuglement -10 en DEX sur les ennemis pendant 2 tours",
        "effect2": "Rayon Pure 2D20 sur les ennemis visibles",
        "oufball": "Tir étincelant puissance 20"
    },
    {
        "name": "Shadow l’esprit de l’Ombre",
        "img" : "divinity/shadow.png",
        "passif": "Immunité à l’affliction",
        "effect1": "Dissimulation du groupe  pendant 2 tours",
        "effect2": "Force Noire  2D12 sur les ennemis visibles et invisibles",
        "oufball": "Disparition, ne peut être ciblé ce tour"
    },
    {
        "name": "Ondine l’esprit de l’eau",
        "img" : "divinity/ondine.png",
        "passif": "+ 5 PV + respiration aquatique",
        "effect1": "Eau de vie full PM",
        "effect2": "Tsunami 2D20 sur les ennemis visibles et repousse les ennemis",
        "oufball": "Frappe Tsunami bump de deux case pour tous les joueurs (tous dans le même sens)"
    },
    {
        "name": "Sylphide l’esprit du Vent et de la Foudre",
        "img" : "divinity/sylphide.png",
        "passif": "+ 2 Dex",
        "effect1": "Toucher automatique  pendant 2 tours pour le groupe",
        "effect2": "Tornade de Foudre 2D20 sur les ennemis visibles",
        "oufball": "Drible zephyr défense de 20"
    },
    {
        "name": "Luna l’esprit de la Lune",
        "img" : "divinity/luna.png",
        "passif": "+2 en FORCE",
        "effect1": "Puit de gravité diminue les cibles pendant 1 tour",
        "effect2": "+3 en CA pendant 5 tours pour le groupe",
        "oufball": "frappe stellaire frappe joueur puissance 20"
    },
    {
        "name": "Ruby l’esprit du Sang",
        "img" : "divinity/ruby .png",
        "passif": "soin de 1PV par cible tuée",
        "effect1": "Succion 1D10 sur les ennemis visibles et soin de ce montant sur le groupe",
        "effect2": "Purge tout effet néfaste pour le groupe et les transmet à une cible",
        "oufball": "Sang oxygéné regain des pv pour un joueur"
    },
    {
        "name": "Anann l’esprit du Temps",
        "img" : "divinity/anann.png",
        "passif": "regen 1PV par tour",
        "effect1": "Ralentissement Tous les ennemis visibles sont paralysé pendant 2 tours",
        "effect2": "Accélération double le nombre d’action pour le groupe",
        "oufball": "Tir Feu tout puissant puissance 20"
    },
    {
        "name": "Menel l’esprit dimensionnel ",
        "img" : "divinity/menel.png",
        "passif": "demi présence +1 en CA",
        "effect1": "Ouvre un vortex entrant et un autre sortant",
        "effect2": "Téléportation de masse (l’endroit est aléatoire pour les ennemis)",
        "oufball": "Tir dimensionnelle Tir de puissance 10 quel que soit la distance"
    },
    {
        "name": "Ryûk l’esprit de la Mort",
        "img" : "divinity/Ryûk.png",
        "passif": "les actions qui devrait le tuer le met à -5PV et reste “vivant” pendant 1 tour (1 fois tous les 5 tours)",
        "effect1": "Afflige 1D10 pendant 5 tours tous les ennemis visibles",
        "effect2": "Résurrection d’une cible",
        "oufball": "“J’ai fait semblant de dire que j’était mort” permet de revenir en jeu et de récupérer ses dés sans attendre de délais"
    },
    {
        "name": "Manaan l’esprit de la magie",
        "img" : "divinity/manaan.png",
        "passif": "Immunité à la brûlure de mana",
        "effect1": "Ennemis et alliés gagne 1D10 PM, les brûlure de Mana sont des AOE, le surplus n’est pas consommé à la brûlure (2 dégâts par brûlure)",
        "effect2": "Le Mana remonte à son maximum chaque tour pendant 1D4 tour",
        "oufball": "récupère tous les PT d’un joueur"
    },
];

// Je parcours mon array divinityArray, et à chaque passage de ligne du tableau, je stock la valeur dans product
divinityArray.forEach(function(product) {
    createProducts(product);
});

function createProducts(product) {
    // on créé notre constante const pour manipuler notre div products
    const products = document.getElementById('products');
    let div = document.createElement('div');
    // Je suis en mode faineant : j'utilise les magic quote pour écrire mon code html
    div.innerHTML =
        `<div class="card col m-1" style="width: 18rem; height: 42rem">
            <img src="../assets/img/${product.img}" class="card-img-top" alt="${product.name}">
            <div class="card-body">
                <p class="card-title h5">${product.name}</p>
                <p class="card-text">Passif : ${product.passif}</p>
                <p>Intervention divine : </p>
                <p class="card-text">- ${product.effect1}</p>
                <p class="card-text">- ${product.effect2}</p>
                
            </div>
        </div>`
        products.appendChild(div);
}
