/**
 * Classe DbCar
 * Gère la collection de voitures
 */
class DbCar 
{
    /**
     * Initialise une nouvelle instance de DbCar
     */
    constructor() {
        this.cars = [];
    }

    /**
     * charge le JSON et stocke le contenu chargé dans l'attribut... 
     */
    async fetchAllCars() {
        let response = await fetch('./cars.json');
        let json = await response.json();

        for(let car of json) {
            
        }

    }
}

export { DbCar }