<script>
export default {
    name: "Sidebar"
}
</script>

<template>
    <aside class="sidebar">
        <a>
            <i class="fa-home"/>
            Главная
        </a>
        <a>
            <i class="fa-shopping-cart"/>
            Продукты
        </a>
    </aside>
</template>

<style scoped>
    .sidebar {
        grid-area: 2 / 1 / 3 / 2;
        background: var(--sidebar-bg-color);
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .sidebar a {
        font-size: 1rem;
        font-weight: normal;
        background: var(--sidebar-item-color);
        width: 100%;
        height: 50px;
        color: var(--bg-color);
        border-bottom: 1px solid var(--sidebar-bg-color);
        padding: 10px 30px;
        display: flex;
        align-items: center;
        gap: 5px;
        cursor: pointer;
        opacity: .8;
    }
    .sidebar a:hover {
        opacity: 1;
    }
    .sidebar i {
        width: 22px;
        height: 22px;
        margin-bottom: 2px;
    }
</style>
