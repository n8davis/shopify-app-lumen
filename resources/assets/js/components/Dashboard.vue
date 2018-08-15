<template>
    <div>

        <b-card
            v-for="(section, index) in data.sections" :key="index"
            @click="$router.push( { name: section.name , params:{ shop : data.shop , section : section.name } } )"
            :title="section.name"
            :sub-title="section.sub_title">
            <p class="card-text">
                {{ section.desc }}
            </p>
        </b-card>

    </div>
</template>

<script>

    import axios from 'axios';
    import Vue from 'vue';
    import { Card , Button , Table } from 'bootstrap-vue/es/components';
    import Router from 'vue-router';

    Vue.use(Table);
    Vue.use(Card);
    Vue.use(Button);
    Vue.use(Router);

    export default {
        data(){
            return{
                data:{
                    section : '',
                    url  : 'https://jookbot.com/metafield/',
                    sections: [],
                    shop : ''
                }
            }
        },
        methods:{
            request : function( options , callback ){
                axios(options)
                    .then(function (response) {
                        callback( response.data ) ;
                    })
                    .catch(function (error) {
                        callback( error ) ;
                        ShopifyApp.flashError( "There was a problem." );
                    });
            },
            getUrlName : function(name, url) {
                name = name.replace(/[\[]/, '\\\[').replace(/[\]]/, '\\\]');
                let results = new RegExp('[?&]'+name+'=?([^&#]*)').exec(url || window.location.href);
                return results == null ? null : results[1] || true;
            },
            shopifyInit: function( vm ){
                let shop = this.getUrlName( 'shop' , window.location.href ) ;
                this.data.shop = shop;
                axios({
                    method: 'POST',
                    headers: {'x-skeleton-app-header': shop },
                    data: JSON.stringify([]),
                    url : 'shops/access?shop=' + shop ,
                })
                .then(function (response) {
                    let token = response.data;
                    let shopifyButtons = {
                        secondary: [
                            {
                                label: "Dashboard",
                                callback: function(){ vm.$router.push( { name: 'Dashboard' , params:{shop:shop}} ) }
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
                        title: "Dashboard",
                        icon: 'metafield/public/images/logo.png',
                        buttons : shopifyButtons
                    });
                })
                .catch(function (error) {
                    console.log( error ) ;
                    ShopifyApp.flashError( "There was a problem." );
                });

            },
            load: function( vm ) {
                let shop = this.getUrlName( 'shop' , window.location.href ) ;
                this.request( {
                    method: 'POST',
                    headers: {'x-skeleton-app-header': shop },
                    data: JSON.stringify([]),
                    url : 'dashboard/load?shop=' + shop ,
                } , function( data ){
                    console.log( data );
                    vm.data.sections = data.sections;
                });
            }
        },
        components:{
        },
        created(){
            this.shopifyInit( this ) ;
            this.load( this ) ;
        },
        mounted(){}
    }
</script>
<style scoped>
</style>