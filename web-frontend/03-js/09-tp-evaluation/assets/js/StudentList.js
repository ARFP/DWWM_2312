import { Student } from "./Student.js";

export class StudentList
{
    /**
     * Gère la liste des étudiants
     */
    constructor() {
        this.students = [];
    }

    /**
     * Créé la liste d'étudiants
     */
    async createStudents() {
        let json = await this.loadData();
        // On parcourt le jeu de données
        for(let aStudent of json) {
            // Pour chaque étudiant, on crée une instance de la classe Student
            let newStudent = new Student(aStudent.fullname, aStudent.grade);
            // On ajoute l'instance dans notre tableau d'étudiants
            this.students.push(newStudent);
        }
    }

    /**
     * 
     * @returns Charge les données JSON
     */
    async loadData() {
        // Récupération du JSON
        let response = await fetch('./assets/data/evaluation.json');
        // Conversion du JSON en objet Javascript
        const json = await response.json();

        return json;
    }
}
