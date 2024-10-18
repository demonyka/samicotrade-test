<script>
import Card from "@/Components/Elements/Card.vue";
import AuthLayout from "@/Layouts/AuthLayout.vue";
import './auth.css';
import {Link, useForm} from "@inertiajs/vue3";
import {showError} from "@/scripts.js";

export default {
    components: {
        Link,
        AuthLayout,
        Card
    },
    data() {
        return {
            form: useForm({
                username: '',
                password: '',
                password_confirmation: '',
            })
        }
    },
    methods:{
        submit() {
            this.form.post(this.route('auth.register'), {
                onError: (errors) => {
                    Object.values(errors).forEach(error => {
                        showError(error);
                    });
                    setTimeout(() => {
                        this.form.clearErrors();
                    }, 4000)
                    this.form.reset('password_confirmation');
                },
            })
        }
    }

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
                <input
                    type="password"
                    id="password"
                    placeholder="Подтвердите пароль"
                    v-model="form.password_confirmation"
                    :class="{'error': form.errors.password_confirmation}"
                    @focus="form.clearErrors('password_confirmation')"
                >
                <button type="submit">Зарегистрироваться</button>
            </form>
        </Card>
    </AuthLayout>
</template>

<style scoped>

</style>
