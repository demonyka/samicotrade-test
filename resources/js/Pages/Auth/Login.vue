<script>
import Card from "@/Components/Elements/Card.vue";
import AuthLayout from "@/Layouts/AuthLayout.vue";
import {Link} from "@inertiajs/vue3";
import './auth.css';

export default {
    components: {
        AuthLayout,
        Card,
        Link
    }

}
</script>

<template>
    <AuthLayout>
        <Card>
            <h1 class="auth-header">Авторизация</h1>
            <form class="auth-form">
                <input
                    type="text"
                    id="username"
                    placeholder="Логин"
                >
                <input
                    type="password"
                    id="password"
                    placeholder="Пароль"
                >
                <button type="submit">Войти</button>
                <Link :href="route('auth.register')" class="link">Зарегистрироваться</Link>
            </form>
        </Card>
    </AuthLayout>
</template>

<style scoped>

</style>
