<template>
    <div>
        <div class="clear products-container">
            <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12" v-for="product in products">
                <div class="product-box2">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="img-responsive" v-if="product.photo"
                                 :src="'/uploads/products/thumb/' + product.photo" alt="product"/>
                            <img class="img-responsive" v-else src="/images/no-image.png" alt="product"/>
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
        <infinite-loading @infinite="getProducts"></infinite-loading>
    </div>
</template>

<script>
    import {getAll} from "../services/ProductService";
    import InfiniteLoading from 'vue-infinite-loading';


    export default {
        name: "ProductListComponent",
        components: {
            InfiniteLoading,
        },
        data() {
            return {
                products: [],
                page: 1
            }
        },
        created(){
            this.getProducts();
        },
        methods: {
            getProducts($state) {
                getAll(this.page).then(({data}) => {
                    if (data.data.length) {
                        this.page += 1;
                        this.products.push(...data.data);
                        $state.loaded();
                    } else {
                        $state.complete();
                    }
                });
            },
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
