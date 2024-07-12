import { DbCar } from "./DbCar.js";

let dbCar = new DbCar();
let cars = await dbCar.fetchAll();

const result = document.getElementById('result');
console.log(result);



function genererEmail(personne) { //personne = "Mike DEV";
    
    let tableau = personne.split(' ');
    let prenom = tableau[0];
    let nom = tableau[1];

    return nom + prenom + '@gmail.com';
}


function genererTableauHTML() {
    let td = document.createElement('td');
    td.textContent = genererEmail('Mike DEV');
}