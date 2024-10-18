<script>
import {Link} from "@inertiajs/vue3";
import ProfileButton from "@/Layouts/ContentLayout/Header/ProfileButton.vue";
export default {
    name: "Header",
    components: {
        ProfileButton,
        Link
    },

}
</script>

<template>
    <header class="header">
        <slot/>
        <ProfileButton/>
    </header>

</template>

<style scoped>
    .header {
        grid-area: 1 / 2 / 2 / 3;
        background: var(--bg-color);
        display: flex;
        align-items: center;
        padding: 0 var(--content-padding);
        position: relative;
    }
</style>
