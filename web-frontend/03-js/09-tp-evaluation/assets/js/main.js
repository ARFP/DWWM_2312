import { Student } from "./Student.js";
import { StudentList } from "./StudentList.js";

const myStudentList = new StudentList();
await myStudentList.createStudents();

const nbStudents = document.getElementById('nbStudents');
nbStudents.textContent = myStudentList.getNbStudents();

const avgGrade = document.getElementById('avgGrade');
avgGrade.textContent = myStudentList.getAvgGrade().toFixed(2);

const aboveAvg = document.getElementById('aboveAvg');
aboveAvg.textContent = myStudentList.getAboveAvg();

createRows(); // création du tableau HTML

console.log(myStudentList);

/**
 * Crée une cellule de tableau
 * @param {String} data la valeur à ajouter dans la cellule 
 * @returns {HtmlElement} La cellule créée
 */
function createCell(data) {
    const td = document.createElement('td');
    td.textContent = data;
    return td;
}

/**
 * Crée une ligne de tableau contenant les informations d'un étudiant
 * @param {Student} aStudent L'étudiant
 * @returns {HtmlElement} La ligne nouvellement créée
 */
function createOneRow(aStudent) {
    const tr = document.createElement('tr');

    tr.appendChild(createCell(aStudent.lastname));
    tr.appendChild(createCell(aStudent.firstname));
    tr.appendChild(createCell(aStudent.grade));
    tr.appendChild(createCell(aStudent.passed ? "Oui" : "Non"));

    return tr;
}

/**
 * Parcourt la liste d'étudiants et créé les lignes de tableaux correspondantes
 */
function createRows() {
    let tbody = document.getElementById('gradeTable');

    for(let aStudent of myStudentList.students) {
        tbody.appendChild(createOneRow(aStudent));
    }
}

/* GESTION DES EVENEMENTS */

const btnAddStudent = document.getElementById('btnAddStudent');
const fullname = document.getElementById('fullname');
const grade = document.getElementById('grade');

btnAddStudent.addEventListener('click', () => {
    let inputFullname = fullname.value;
    let inputGrade = grade.value;
    console.log(inputFullname, inputGrade);

    let newStudent = new Student(inputFullname, inputGrade);
    myStudentList.students.push(newStudent);
    console.log(myStudentList.students);
});
