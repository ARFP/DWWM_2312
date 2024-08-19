const testClr = /[A-F0-9]{2}/

const app = {
    data(){
        return {
            backgroundClr : '#B1CEFC',
            redInput : 'B1',
            greenInput : 'CE',
            blueInput : 'FC'
        }
    },
    methods: {
        changeColor(_event){
            console.log(_event); // données de l'évènement déclenché
            console.log(_event.target); // l'élément qui a déclenché l'évènement
            console.log(_event.target.type); // accès à l'attribut "type" de l'élément
            console.log(_event.target.dataset); // accès au dataset (tous les attributs qui commencent par "data-")

            this.backgroundClr = _event.target.dataset.clr;
        },
        inputColor(){
           
            if (!testClr.test(this.redInput) || !testClr.test(this.greenInput) || !testClr.test(this.blueInput)) {
                console.log("erreur");
                return
            }

            this.backgroundClr = '#' + this.redInput + this.greenInput + this.blueInput;
            

            if (testClr.test(this.redInput) && testClr.test(this.greenInput) && testClr.test(this.blueInput)) {
                this.backgroundClr = '#' + this.redInput + this.greenInput + this.blueInput;
            } else {
                console.log("erreur");
            }
        }
    }
}

document.getElementById('appColors').addEventListener('click', function(_event) {

})


Vue.createApp(app).mount('#appColors');