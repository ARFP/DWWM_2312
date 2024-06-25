class Person 
{
    constructor() {
        this.firstname = "";
        this.age = "";
        this.isMajor = false;
    }

    calcMajority() {
        this.isMajor = this.age >= 18;
    }

    calcRetired() {
        if(this.age > 18) { //  + de 64 ans

        } else if (this.age < 64) { // - de 64 ans

        } else { // == 64 ans

        }
    }

}

export { Person }
