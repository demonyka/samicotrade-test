<script>
import {Head, Link} from "@inertiajs/vue3";
import ContentLayout from "@/Layouts/ContentLayout/ContentLayout.vue";
import './table.css';
export default {
    components: {
        Head,
        ContentLayout,
        Link
    },
    props: [
        'products'
    ],
    data() {
        return {
            links: [
                {
                    url: route("products.list"),
                    name: "Список продуктов",
                    active: true
                },
                {
                    url: '#',
                    name: "Добавить продукты",
                    active: false
                }
            ]
        }
    }

}
</script>

<template>
    <Head title="Список продуктов"/>
    <ContentLayout :links="links">
        <template #content>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Наименование</th>
                    <th>Кол-во</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="product in products.data">
                    <td>{{ product.id }}</td>
                    <td>{{ product.name }}</td>
                    <td>{{ product.amount }} шт.</td>
                    <td>{{ product.price }}$</td>
                </tr>
                </tbody>
            </table>
        </template>
    </ContentLayout>
</template>

<style scoped>

</style>
