import { Student } from "./Student.js";

// Récupération du JSON
let response = await fetch('./assets/data/evaluation.json');
// Conversion du JSON en objet Javascript
const json = await response.json();

// Affichage du jeu de données téléchargé
console.log(json);

// Création du tableau d'étudiants qui stockera nos instances de la classe Student
// C'est ce tableau que l'on manipulara dans l'application
const students = [];

// On parcourt le jeu de données
for(let aStudent of json) {
    // Pour chaque étudiant, on crée une instance de la classe Student
    let newStudent = new Student(aStudent.fullname, aStudent.grade);
    // On ajoute l'instance dans notre tableau d'étudiants
    students.push(newStudent);
}

// Affichage du tableau d'étudiants
console.log(students);




//console.log(students)

