let employer = [
    "Un garde offre une récompense pour la tête d'une créature se trouvant proche d'un littoral",
    "Un érudit offre une récompense pour la tête d'une créature se trouvant proche d'une grotte",
    "Un marchand offre une récompense pour la tête d'une créature se trouvant proche d'un batiment.",
    "Un marchand offre une récompense pour la tête d'une créature se trouvant proche d'une grotte",
    "Un comte offre une récompense pour la tête d'une créature se trouvant proche d'un batiment abandonné",
    "Un chasseur de sorcière offre une récompense pour la tête d'une créature se trouvant proche d'une riviere",
    "Un érudit offre une récompense pour la tête d'une créature se trouvant proche d'un village"
]

let monster = [
    "Genaudes Aquatiques",
    "Guenaude Sépulcrale",
    "Golem",
    "Loups-Garous",
    "Arachas",
    "Fiellon",
    "Goule",
    "Griffons",
    "Nekkers",
    "Wyverns",
    "Katakans",
    "Harpies",
    "Troll",
    "Spectre de midi",
    "Spectre de minuits"
];

let complication = [
    "Un chevalier est aussi sur le contrat.",
    "Pas de complication",
    "Un Sorceleur est déjà sur le contrat.",
];

let twist = [
    "Oui : L'employeur est responsable",
    "Oui : L'employeur le veux vivant°",
    "L'employeur vous propose un marché",
    "Non",
    "Oui : Le monstre est déjà mort.",
    "Oui : Le monstre est un faux"
];

let paye = [
    "L'employeur paie moins que convenu.",
    "L'employeur est introuvable",
    "L'employeur essaie de vous faire tuer",
    "L'employeur paie plus que convenu.",
    "L'employeur paie exactement comme convenu"
];


let contract = document.getElementById('contract');
let button = document.getElementById('button');

button.addEventListener('click', function (){
    contract.innerHTML +=  employer[Math.floor(Math.random() * employer.length)]+ '<br>' +"Le monstre :"
        + monster[Math.floor(Math.random() * monster.length)] + '<br>' +"Complication:" + complication[Math.floor(Math.random() * complication.length)] +
        '<br>' + "Twist :" + twist [Math.floor(Math.random() * twist.length)] + '<br>' + "Paye :" + paye[Math.floor(Math.random() * complication.length)]

});

