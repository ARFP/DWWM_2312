const app = {
    data() {
        return {
            message: 'Compteur de clics',
            compteur: 0
        }
    },
    methods: {
        incrementer() {
            this.compteur++;
        }
    }
}

Vue.createApp(app).mount('#monApp')