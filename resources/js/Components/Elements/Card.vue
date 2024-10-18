<script>
export default {
    name: "Card"
}
</script>

<template>
    <div class="card">
        <slot/>
    </div>
</template>

<style scoped>
    .card {
        background: var(--block-color);
        box-shadow: var(--block-shadow);
        padding: var(--block-padding);
        border-radius: var(--block-border-radius);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: var(--block-gap);
        position: relative;
    }
</style>
