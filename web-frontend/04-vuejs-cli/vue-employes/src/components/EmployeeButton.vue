<script>
export default {
    emits: ['click']
}
</script>
<template>
    <button @click="$emit('click')"><slot/></button>
</template>
<style scoped></style>