import { StudentList } from "./StudentList.js";

const myStudentList = new StudentList();
await myStudentList.createStudents();

createRows();

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
