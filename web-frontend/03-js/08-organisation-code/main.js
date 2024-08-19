import { DbCar } from "./DbCar.js";


const resultElement = document.getElementById('result');


let dbCar = new DbCar();
let cars = await dbCar.fetchAll();


// Exemple personne = "Mike DEV";
function genererEmail(personne) { 
    
    let tableau = personne.split(' ');
    let prenom = tableau[0];
    let nom = tableau[1];

    return nom + prenom + '@gmail.com';
}


function genererTableauHTML() {
    let td = document.createElement('td');
    td.textContent = genererEmail('Mike DEV');
    // suite du code...
}