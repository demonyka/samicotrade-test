<script>
import {Head, Link, useForm} from "@inertiajs/vue3";
import ContentLayout from "@/Layouts/ContentLayout/ContentLayout.vue";
import './table.css';
import {showError} from "@/scripts.js";
export default {
    components: {
        Head,
        ContentLayout,
        Link,
    },
    data() {
        return {
            links: [
                {
                    url: route("products.list"),
                    name: "Список продуктов",
                    active: false
                },
                {
                    url: route('products.create'),
                    name: "Добавить продукты",
                    active: true
                }
            ],
            productsForm: useForm({
                products: [
                    {
                        name: '',
                        amount: '',
                        price: ''
                    }
                ]
            })
        }
    },
    methods: {
        addProduct() {
            this.productsForm.products.push({
                name: '',
                amount: '',
                price: ''
            });
        },
        deleteProduct(index) {
            this.productsForm.products.splice(index, 1);
        },
        submit() {
            this.productsForm.post(route('products.create'), {
                onError: (errors) => {
                    Object.values(errors).forEach(error => {
                        showError(error);
                    });
                },
                onSuccess: () => {
                    this.productsForm.reset();
                }
            });
        }
    }

}
</script>

<template>
    <Head title="Добавить продукты"/>
    <ContentLayout :links="links">
        <template #content>
            <form @submit.prevent="submit">
                <table>
                    <thead>
                        <tr>
                            <th>Наименование</th>
                            <th>Кол-во</th>
                            <th>Стоимость</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(product, index) in productsForm.products">
                            <td>
                                <input
                                    placeholder="Введите наименование"
                                    type="text"
                                    v-model="product.name"
                                    required
                                >
                            </td>
                            <td>
                                <input
                                    placeholder="Укажите кол-во"
                                    type="number"
                                    v-model="product.amount"
                                    required
                                    min="0"
                                    max="2147483646"
                                >
                            </td>
                            <td>
                                <input
                                    placeholder="Укажите стоимость (руб.)"
                                    type="number"
                                    v-model="product.price"
                                    required
                                    min="0"
                                >
                            </td>
                            <td v-if="index !== 0" class="delete">
                                <svg @click="deleteProduct(index)" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                    <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                                </svg>
                            </td>
                            <td v-else class="add">
                                <svg @click="addProduct" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                    <path d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/>
                                </svg>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit">Сохранить</button>
            </form>
        </template>
    </ContentLayout>
</template>

<style scoped>
    table input[type=text], table input[type=number] {
        width: 100%;
        background: transparent;
        border: none;
        outline: none;
    }
    td.delete,
    td.add {
        border: none;
        width: 32px;
    }
    td svg {
        cursor: pointer;
        opacity: .8;
    }
    td svg:hover {
        opacity: 1;
    }
    td.delete svg {
        fill: var(--error-color);
    }
    td.add svg {
        fill: var(--accent-color);
    }
    form button[type=submit] {
        margin-top: 10px;
        background: var(--accent-color);
        border: none;
        outline: none;
        padding: 5px 10px;
        color: white;
        border-radius: 4px;
        cursor: pointer;
    }
</style>
