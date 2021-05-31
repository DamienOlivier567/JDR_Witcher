let humainsm = [
   "Bravic", "Aaclan", "Kelwan", "Stenir", "Oson", "Drakra", "Rithulwar", "Geoknay", "Dradlalt", "Deacay", "Bumrualt",
   "Krardeeb", "Hadub", "Sakeell", "Levind", "Fienandleo", "Venzalt", "Granucreir", "Seisra", "Stiegrall", "Beisild",
   "Fobreall", "Reolwast", "Rimriell", "Ilto", "Stekrad", "Onnak", "Drenha", "Dabac", "Nicast"
]

let humainsf = [
   "Ibru", "Ige", "Kabuan", "Infri", "Kettu", "Colliggo", "Grizan", "Bririossis", "Cepha", "Kiphasua", "Vuabro",
   "Kenfro", "Uatha", "Ulvo", "Nairgoth", "Ancaduel", "Eiveghia", "Issa", "Nidda", "Phaessa", "Vighen",
   "Dallath", "Shunco", "Filmu", "Aivu", "Canfras", "Grianeshen", "Grolma", "Thattasos", "Caprureil"
];

let elfesm = [
    "Vurlil", "Dunlo", "Oimloc", "Maemmirr", "Enloch", "Cheinlaengo", "Heiharr", "Morrdan", "Taidann", "Conlesaid",
    "Vrionneim", "Ovich", "Ingren", "Geandrunn", "Hadun", "Rendrath", "Urochan", "Tandra", "Virlad", "Darengrol",
    "Crandath", "Mede", "Cruvud", "Aerrdairr", "Vremlo", "Gasornec", "Terbrusi", "Iamdach", "Crurrdar", "Ongras"
];

let elfesf = [
    "Mofresh", "Shimmi", "Ofri", "Tasi", "Tosuas", "Dosunnees", "Srellelua", "Covuaghie", "Thotlaefenn", "Tiefuaffo",
    "Tittu", "Fiffia", "Ufu", "Ieve", "Iglosh", "Rutla", "Rieva", "Iotta", "Cedhale", "Errorresh",
    "Shishul", "Tasus", "Srathlee", "Ivian", "Ceglies", "Nuashamnun", "Sietlesua", "Iallitha", "Mofoffee", "Cathluro"
];

let nainm = [
    "Bilcinn", "Gurna", "Jahik", "Fauckeigreld", "Erpork", "Vinrald", "Rhandialm", "Ogras", "Krerni", "Hairtaicay",
    "Kreggarn", "Pruveivess", "Crulciccark", "Daungvan", "Xeza", "Breizdelust", "Faucrann", "Urta", "Zhurdar", "Kolrard"
];

let nainf = [
    "Rurhi", "Tralnald", "Moccia", "Ligreittils", "Rarlu", "Cronlolnags", "Ghazme", "Trisslam", "Gumo", "Eindausrigs",
    "Ghosnath", "Drecaggs", "Tharla", "Vovarg", "Zeghialru", "Anar", "Zhegra", "Skihnehlnan", "Dagalwo", "Craggenrorg"
]


let name = document.getElementById('name');
let button = document.getElementById('button');

button.addEventListener('click', function (){
    name.innerHTML += "Humains" + '<br>' + "Masculin :" + " " + humainsm[Math.floor(Math.random() * humainsm.length)]+ '<br>'
        + "Feminin :" + humainsf[Math.floor(Math.random() * humainsf.length)] + '<br>'
        + "Elfes" + '<br>' + "Masculins :" + " " + elfesm[Math.floor(Math.random() * elfesm.length)] + '<br>'
        + "Feminin :" + elfesf[Math.floor(Math.random() * elfesf.length)] + '<br>'
        + "Nains " + '<br>' + "Masculins :" + " " + nainm[Math.floor(Math.random() * nainm.length)] + '<br>'
        + "Feminin :" + nainf[Math.floor(Math.random() * nainf.length)] ;
});