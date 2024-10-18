<script>
import Card from "@/Components/Elements/Card.vue";
import AuthLayout from "@/Layouts/AuthLayout.vue";
import './auth.css';
import {Link} from "@inertiajs/vue3";

export default {
    components: {Link, AuthLayout, Card}

}
</script>

<template>
    <AuthLayout>
        <Card>
            <Link :href="route('auth.login')" class="back-button">
                <svg class="back-button" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                    <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/>
                </svg>
            </Link>
            <h1 class="auth-header">
                Регистрация
            </h1>
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
                <input
                    type="password"
                    id="password"
                    placeholder="Подтвердите пароль"
                >
                <button type="submit">Зарегистрироваться</button>
            </form>
        </Card>
    </AuthLayout>
</template>

<style scoped>

</style>
