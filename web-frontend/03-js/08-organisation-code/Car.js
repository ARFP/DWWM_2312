class Car 
{
    constructor(brand, model) {
        this.brand = brand;
        this.model = model;
    }

    getFullName() {
        return this.brand + ' ' + this.model;
    }

}

export { Car }