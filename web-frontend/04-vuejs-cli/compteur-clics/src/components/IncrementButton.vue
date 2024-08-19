<script>
export default {
    data() {
        return {
            compteur: 0
        }
    },
    methods: {
        incrementer() {
            this.compteur++;
        }
    }
}
</script>
<template>
    <button @click="incrementer" class="increment">Ajouter 1</button>
    <p>Vous avez cliqué {{ compteur }} fois</p>
</template>
<style scoped>
.increment {
    border: 1px solid darkorange;
}
</style>