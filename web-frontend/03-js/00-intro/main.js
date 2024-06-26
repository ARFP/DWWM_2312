
const url = "toto";
const btn = document.getElementById('btn');
const compteur = document.getElementById('compteur');
//const btn2 = dinterocument.querySelector('#btn');
console.log(btn);

btn.addEventListener('click', (event) => {
    let valeur = compteur.textContent;
    console.log(valeur);
    valeur = parseInt(valeur);
    ++valeur;
    compteur.textContent = valeur;
});
