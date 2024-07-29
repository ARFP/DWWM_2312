import { Student } from "./Student.js";

export class StudentList
{
    /**
     * Gère la liste des étudiants
     */
    constructor() {
        /** @var {Array} students La liste d'étudiants  */
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
        this.sortStudents();
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

    /**
     * Trie la liste d'étudiants par note de la plus élevée à la plus basse
     */
    sortStudents() {
        this.students.sort((a, b) => { return a.grade - b.grade });
        // equivalent plus court : this.students.sort((a, b) => a.grade - b.grade );
        this.students.reverse();
    }

    /**
     * Retourne le nombre d'étudiants dans la liste
     * @returns {Number} Retourne le nombre d'étudiants dans la liste
     */
    getNbStudents() {
        return this.students.length;
    }

    /**
     * Calcule la moyenne des notes des étudiants
     * @returns {Number} La moyenne des notes des étudiants
     * 
     */
    getAvgGrade() {
        let avg = 0;

        // additionner toutes les notes
        for(let i = 0; i < this.students.length; i++) {
            let myStudent = this.students[i];
            avg += myStudent.grade;
        }

        // calculer la moyenne des notes
        avg = avg / this.students.length;

        return avg;
    }

    /**
     * Calcule le nombre d'étudiants au dessus de la note moyenne
     * @returns {Number} Le nombre d'étudiants au dessus de la note moyenne
     */
    getAboveAvg() {
        let studentsSup = 0;
        let avgGrade = this.getAvgGrade();

        for(let i = 0; i < this.students.length; i++) {
            let myStudent = this.students[i];

            if(myStudent.grade > avgGrade) {
                studentsSup++;
            }
        }

        return studentsSup;
    }

}
