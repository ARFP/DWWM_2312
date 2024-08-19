import { Person } from './Person.js';

const p = new Person();

console.log(p);

const prenom = document.getElementById('prenom');
const age = document.getElementById('age');
const resultat = document.getElementById('resultat');

console.log(prenom, age);

document.querySelector('button[type="button"]').addEventListener('click', () => {
    p.firstname = prenom.value;
    p.age = age.value;
    p.calcMajority();
    console.log(p);
    resultat.textContent = "Bonjour " + p.firstname + ",  vous avez " + p.age + " ans.";
    resultat.textContent = `Bonjour ${p.firstname}, vous avez ${p.age} ans.`;
    resultat.innerHTML += "<br>Vous êtes " + (p.isMajor ? "majeur" : "mineur");
});
