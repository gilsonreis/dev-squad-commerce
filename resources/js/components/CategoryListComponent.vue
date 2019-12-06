<template>
    <div>
        <h2 class="title-sidebar">SHOP CATEGORIES</h2>
        <div class="category-menu-area sidebar-section-margin" id="category-menu-area">
            <ul>
                <li v-for="category in categories">
                    <a href="#"> {{ category.name }}</a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import {getAll}  from "../services/CategoryService";

    export default {
        name: "CategoryListComponent",
        data() {
            return {
                categories: []
            }
        },
        created() {
            this.getCategories();
        },
        methods: {
            getCategories() {
                getAll().then(response => {
                    this.categories = response.data;
                })
            }
        }
    }
</script>

<style scoped>

</style>
