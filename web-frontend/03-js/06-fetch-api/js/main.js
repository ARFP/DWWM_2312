const app = {
    data() {
        return {
            title: 'Code postaux',
            userInput: '',
            cities: [],
            results: []
        }
    },

    async mounted() {
        let response = await fetch('./data/zipcodes.json');
        this.cities = await response.json();
        console.log(this.cities);
    },

    methods: {
        validate() {
            this.results = this.cities.filter(city => city.codePostal === this.userInput);

            /*for(let city of this.cities) {
                if(city.codePostal == this.userInput) {
                    this.results.push(city);
                }
            }*/
        }
    }
}

Vue.createApp(app).mount("#zipCodes");
