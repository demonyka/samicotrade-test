<script>
import Card from "@/Components/Elements/Card.vue";
import AuthLayout from "@/Layouts/AuthLayout.vue";
import {Link, useForm} from "@inertiajs/vue3";
import './auth.css';
import {showError} from "@/scripts.js";

export default {
    components: {
        AuthLayout,
        Card,
        Link
    },
    data() {
        return {
            form: useForm({
                username: '',
                password: '',
            })
        }
    },
    methods: {
        submit() {
            this.form.post(this.route('auth.login'), {
                onError: (errors) => {
                    Object.values(errors).forEach(error => {
                        showError(error);
                    });
                    setTimeout(() => {
                        this.form.clearErrors();
                    }, 4000)
                    this.form.reset('password');
                },
            })
        }
    },
}
</script>

<template>
    <AuthLayout>
        <Card>
            <h1 class="auth-header">Авторизация</h1>
            <form @submit.prevent="submit" class="auth-form">
                <input
                    type="text"
                    id="username"
                    placeholder="Логин"
                    v-model="form.username"
                    :class="{'error': form.errors.username}"
                    @focus="form.clearErrors('username')"
                >
                <input
                    type="password"
                    id="password"
                    placeholder="Пароль"
                    v-model="form.password"
                    :class="{'error': form.errors.password}"
                    @focus="form.clearErrors('password')"
                >
                <button type="submit">Войти</button>
                <Link :href="route('auth.register')" class="link">Зарегистрироваться</Link>
            </form>
        </Card>
    </AuthLayout>
</template>

<style scoped>

</style>
