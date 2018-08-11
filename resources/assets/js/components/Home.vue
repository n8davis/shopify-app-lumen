<template>
    <div>
        <b-card title="Card Title"
                img-src="https://picsum.photos/600/300/?image=25"
                img-alt="Image"
                img-top
                tag="article"
                style="max-width: 20rem;"
                class="mb-2">
            <p class="card-text">
                Quick example text to build on the card title and make up the bulk of the card's content.
            </p>
            <b-button href="#" variant="primary">Go somewhere</b-button>
        </b-card>

    </div>
</template>

<script>

    import axios from 'axios';
    import Vue from 'vue';
    import { Card , Button } from 'bootstrap-vue/es/components';
    import Router from 'vue-router';

    Vue.use(Card);
    Vue.use(Button);
    Vue.use(Router);
let shop = 'n8davis.myshopiyf.com';
    export default {
        data(){
            return{
                data:{}
            }
        },
        methods:{
            shopifyInit: function( vm ){
                axios({
                    method: 'POST',
                    headers: {'x-skeleton-app-header': shop },
                    data: JSON.stringify([]),
                    url : url + 'shops/access?shop=' + shop ,
                })
                .then(function (response) {
                    let token = response.data;
                    let shopifyButtons = {
                        secondary: [
                            {
                                label: "Home",
                                callback: function(){ vm.$router.push( { name: 'Home' , params:{shop:shop}} ) }
                            },
                        ]
                    };
                    ShopifyApp.init({
                        apiKey: token,
                        shopOrigin: "https://" + shop,
                        debug: false,
                        forceRedirect: true
                    });
                    ShopifyApp.Bar.initialize({
                        title: "Title",
                        icon: '',
                        buttons : shopifyButtons
                    });
                })
                .catch(function (error) {
                        ShopifyApp.flashError( "There was a problem." );
                    });
            }
        },
        components:{
        },
        created(){
            this.shopifyInit( this ) ;
        },
        mounted(){}
    }
</script>
<style scoped>
</style>