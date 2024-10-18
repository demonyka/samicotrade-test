<script>
import {Link} from "@inertiajs/vue3";
import ProfileButton from "@/Layouts/ContentLayout/Header/ProfileButton.vue";
import './header.css';
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

</style>
