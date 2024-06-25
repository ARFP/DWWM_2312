const DEFAULT_SIZE = 16
const MIN_SIZE = 8
const MAX_SIZE = 48

const app = {
    data() {
        return {
            textSize: DEFAULT_SIZE
        }
    },
    computed: {
        realTextSize() {
            if(this.textSize < MIN_SIZE || this.textSize > MAX_SIZE) {
                this.textSize = DEFAULT_SIZE;
            }
            return this.textSize;
        }
    },
    methods: {
        increaseSize() {
            this.textSize++;
        },
        decreaseSize() {
            this.textSize--;
        }
    }
}

Vue.createApp(app).mount('#app');