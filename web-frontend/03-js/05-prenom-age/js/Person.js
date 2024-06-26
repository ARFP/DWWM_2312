class Person 
{
    static RETIRED_AGE = 64;

    constructor() {
        this.firstname = '';
        this.age = 0;
    }

    getMajority() {
        if(this.age >= 18) {
            return 'Vous êtes majeur';
        } else {
            return 'Vous êtes mineur';
        }
    }

    getRetired() {
        let reste;

        if(this.age < Person.RETIRED_AGE) { // - de 64 
            reste = Person.RETIRED_AGE  - this.age;
            return `Il vous reste ${reste} années avant la retraite`;
        } else if (this.age > Person.RETIRED_AGE) { // + de 64
            reste = this.age - Person.RETIRED_AGE;
            return `Vous êtes à la retraite depuis ${reste} années`;
        } else { // égal à 64
            return 'Vous prenez votre retraite cette année !';
        }
    }


}


export { Person }