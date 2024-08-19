let xhr = new XMLHttpRequest();

// chargement d'un fichier distant
xhr.open('GET', 'https://arfp.github.io/tp/web/javascript/02-zipcodes/zipcodes.json');
// chargement d'un fichier local
//xhr.open('GET', './data/zipcodes.json');

xhr.onload = () => {
    let json = JSON.parse(xhr.response); // conversion du JSON en objet JS
}

xhr.send();


fetch('https://arfp.github.io/tp/web/javascript/02-zipcodes/zipcodes.json')
.then((response) => {
    return response;
})
.then((response) => {
    let response = response.json();
});

let reponse = await fetch('https://arfp.github.io/tp/web/javascript/02-zipcodes/zipcodes.json');
let json = await reponse.json();