export class Student 
{
    /**
     * Constructeur de la classe Student
     * @param {String} _fullname Le nom complet de l'étudiant
     * @param {Number} _grade La note de l'étudiant
     */
    constructor(_fullname, _grade) {
        this.fullname = _fullname;
        this.grade = parseInt(_grade);
        this.lastname = '';
        this.firstname = '';
        this.passed = this.grade >= 12; // false = non obtenu / true = obtenu
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

    isGradeValid() {
        return this.grade >= 0 && this.grade <= 20;     
    }


}
