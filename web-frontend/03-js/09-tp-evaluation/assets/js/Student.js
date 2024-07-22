export class Student 
{
    /**
     * Constructeur de la classe Student
     * @param {String} _fullname Le nom complet de l'étudiant
     * @param {Number} _grade La note de l'étudiant
     */
    constructor(_fullname, _grade) {
        this.fullname = _fullname;
        this.grade = _grade;
        this.lastname = '';
        this.firstname = '';
        this.splitFullname();
    }

    /**
     * Sépare le nom et le prénom
     */
    splitFullname() {
        let splitName = this.fullname.split(' '); // ['Armanetti', 'Michaël']
        this.lastname = splitName[0];
        this.firstname = splitName[1];
    }
}

/*
let toto = { fullname: "Armanetti Michaël", grade: 12 };

console.log(toto.fullname)

let student = new Student(toto.fullname, toto.grade);
*/
// export { Student }
