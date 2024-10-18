<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: "ProfileButton",
    components: {Link},
    data() {
        return {
            showProfileDropdown: false
        }
    },
}
</script>

<template>
    <button @click="showProfileDropdown = !showProfileDropdown;" class="avatar">
        <i class="fa-user"/>
    </button>
    <div v-if="showProfileDropdown" class="profile-dropdown">
        <Link :href="'#'">Выход</Link>
    </div>
</template>

<style scoped>
    button.avatar {
        background: var(--accent-color);
        border: none;
        outline: none;
        cursor: pointer;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: auto;
    }
    button.avatar i {
        width: 32px;
        height: 32px;
    }
    .profile-dropdown {
        position: absolute;
        top: calc(100% + 10px);
        right: var(--content-padding);
        background: var(--bg-color);
        box-shadow: var(--block-shadow);
        padding: var(--block-padding);
        border-radius: var(--block-border-radius);
        display: flex;
        flex-direction: column;
    }
    .profile-dropdown a {
        font-size: 1rem;
        font-weight: normal;
        color: var(--text-color);
        text-decoration: none;
    }
    .profile-dropdown a:hover {
        color: var(--accent-color)
    }
</style>
