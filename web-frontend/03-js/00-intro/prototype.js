class Personne 
{
    constructor() {
        this.nom = "";
        this.prenom = "";
    }

    setNom(nouveauNom) {
        this.nom = nouveauNom;
    }
}

const Personne2 = function() {
    this.nom = "";
    this.prenom = "";
}

Personne2.prototype.setNom = function(nouveauNom) {
    this.nom = nouveauNom;
}