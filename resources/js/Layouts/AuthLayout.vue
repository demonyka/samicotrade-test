<script>
import App from "@/App/App.vue";

export default {
    name: "AuthLayout",
    components: {App}
}
</script>

<template>
    <App>
        <section class="center">
            <slot/>
        </section>
    </App>
</template>

<style scoped>

</style>
