<script>
export default {
    name: "Header"
}
</script>

<template>
    <header class="header">
        <slot/>
    </header>
</template>

<style scoped>
    .header {
        grid-area: 1 / 2 / 2 / 3;
        background: var(--bg-color);
    }
</style>
