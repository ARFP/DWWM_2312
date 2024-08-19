import { Person } from './Person.js'

const app = {
    data() {
        return {
            person: new Person(),
            formResult: 'Compléter/corriger le formulaire',
            majority: '',
            retired: ''
        }
    },
    methods: {
        validateForm() {
            //this.formResult = 'Bonjour ' + this.person.firstname + ', vous avez' + this.person.age + ' ans.';
            this.formResult = `Bonjour, ${this.person.firstname} Vous avez ${this.person.age} ans.`;
            this.majority = this.person.getMajority();
            this.retired = this.person.getRetired();
        }
    }
}

Vue.createApp(app).mount('#app');
