<template>
    <div class="clear products-container">
        <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12" v-for="product in products">
            <div class="product-box2">
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="img-responsive" v-if="product.photo" :src="'/uploads/products/thumb/' + product.photo" alt="product" />
                        <img class="img-responsive" v-else src="/images/no-image.png" alt="product" />
                    </a>
                    <div class="media-body">
                        <div class="product-box2-content">
                            <h3><a href="#">{{ product.title }}</a></h3>
                            <span>${{ product.price }}</span>
                            <p>{{ product.description }}</p>
                        </div>
                        <ul class="product-box2-cart">
                            <li><a href="#">Add To Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {getAll} from "../services/ProductService";

    export default {
        name: "ProductListComponent",
        data() {
            return {
                products: []
            }
        },
        created() {
            this.getCategories();
        },
        methods: {
            getCategories() {
                getAll().then(response => {
                    this.products = response.data.data;
                })
            }
        }
    }
</script>

<style scoped>
    .media-body {
        width: 1200px;
    }

    .product-box2 .media-body .product-box2-cart {
        margin-top: 10px;
    }
</style>
