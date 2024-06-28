/*
let reponse = await fetch('https://arfp.github.io/tp/web/javascript/02-zipcodes/zipcodes.json');
let json = await reponse.json();
console.log(json);
*/

const app = {
    data() {
        return {

        }
    },

    async mounted() {
        let reponse = await fetch('https://arfp.github.io/tp/web/javascript/02-zipcodes/zipcodes.json');
        let json = await reponse.json();
    }
}

Vue.createApp(app).mount("#codePostaux");