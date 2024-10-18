<script>
import App from "@/App/App.vue";
import Sidebar from "@/Layouts/ContentLayout/Sidebar.vue";
import Header from "@/Layouts/ContentLayout/Header/Header.vue";
import {Link} from "@inertiajs/vue3";

export default {
    name: "ContentLayout",
    components: {
        Link,
        Header,
        Sidebar,
        App
    },
    props: [
        'links'
    ],
    data() {
        return {
            appName: import.meta.env.VITE_APP_NAME
        }
    }
}
</script>

<template>
    <App>
        <div class="content-grid">
            <div class="logo">
                <h1>{{ appName }}</h1>
            </div>
            <Header>
                <Link
                    v-for="link in links"
                    :key="link.url"
                    :class="{'active': link.active }"
                    class="header-link"
                    :href="link.url"
                >
                    {{ link.name }}
                </Link>
            </Header>
            <Sidebar/>
            <section class="content">
                <slot name="content"/>
            </section>
        </div>
    </App>
</template>

<style scoped>
    .content-grid {
        width: 100%;
        height: 100%;
        display: grid;
        grid-template-columns: 300px 1fr;
        grid-template-rows: 80px 1fr;
        grid-column-gap: 0;
        grid-row-gap: 0;
    }
    .logo {
        grid-area: 1 / 1 / 2 / 2;
        background: var(--sidebar-bg-color);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .logo h1 {
        font-size: 1.5rem;
        font-weight: bold;
        color: var(--bg-color);
        text-transform: uppercase;
    }
    .content {
        grid-area: 2 / 2 / 3 / 3;
        background: var(--content-color);
        padding: var(--content-padding);
    }
</style>
