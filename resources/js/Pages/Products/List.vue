<script>
import {Head, Link} from "@inertiajs/vue3";
import ContentLayout from "@/Layouts/ContentLayout/ContentLayout.vue";
import './table.css';
import {VueAwesomePaginate} from "vue-awesome-paginate";
import "vue-awesome-paginate/dist/style.css";
import "../../../css/paginate.css";
export default {
    components: {
        Head,
        ContentLayout,
        Link,
        VueAwesomePaginate
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
                    url: route('products.create'),
                    name: "Добавить продукты",
                    active: false
                }
            ],
            currentPage: this.products.current_page,
        }
    },
    methods: {
        paginateHandler(page) {
            let url = new URL(window.location.href);
            url.searchParams.set('page', page);
            this.$inertia.visit(url);
        },
    },
    watch: {
        'currentPage': function (newVal) {
            this.paginateHandler(newVal);
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
                    <td>{{ product.price }} руб.</td>
                </tr>
                </tbody>
            </table>
            <div v-if="products && products.total > products.per_page"
                 style="display: flex; flex-direction: column; align-items: center;">
                <VueAwesomePaginate
                    v-model="currentPage"
                    :current-page="products.current_page"
                    :hide-prev-next-when-ends="true"
                    :items-per-page="products.per_page"
                    :max-pages-shown="3"
                    :show-breakpoint-buttons="true"
                    :total-items="products.total"
                />
            </div>
        </template>
    </ContentLayout>
</template>

<style scoped>

</style>
