<template>
    <div>

        <div class="margin-top3 margin-bottom-1">
            <b-button @click="toggle" variant="info">
                {{ ( form.show === true ? 'Hide Form' : 'Add Metafield' )}}
            </b-button>
        </div>

        <div v-if="form.show" class="skeleton-card">
            <b-form v-if="form.step_one" @submit="onSubmit">
                <!-- STEP ONE -->
                <b-form-group v-if="form.step_one" id="selectType"
                              label="What type of resource?"
                              label-for="selectTypeOption">
                    <b-form-select id="selectTypeOption"
                       :options="data.options"
                       required
                       @change="selectedSection"
                       v-model="form.section">
                    </b-form-select>
                </b-form-group>

                <!-- END STEP ONE  -->

                <!-- STEP TWO  -->
                <div v-if="form.step_two">
                    <hr>
                    <b-form-group
                      :label="'Would you like to add metafields to one or all of the ' + form.selectedSection ">
                        <b-form-checkbox-group
                           v-model="form.bulk"
                           buttons
                           button-variant="primary"
                           size="lg"
                           name="buttons2">
                            <b-form-checkbox value="true">All</b-form-checkbox>
                            <b-form-checkbox value="false">One</b-form-checkbox>
                        </b-form-checkbox-group>
                    </b-form-group>
                </div>
                <!-- END STEP TWO  -->

                <!-- STEP THREE  -->
                <div v-if="form.step_three">
                    <hr>
                    <label for="resourceName">Which One?</label>
                    <b-form-input
                        id="resourceName"
                        v-model="form.resource"
                        type="text"></b-form-input>

                    <div v-if="form.resourceSearchLoading" class="spinner">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                </div>
                <!-- END STEP THREE  -->

                <!-- FINAL STEP  -->
                <div v-if="form.final_step">
                    <hr>
                    <b-form-group id="exampleInputGroup1"
                                  label="Metafield Namespace"
                                  label-for="exampleInput1">
                                  <!--description="A container for a set of metafields. You need to define a custom namespace for your metafields to distinguish them from the metafields used by other apps. Maximum length: 20 characters.">-->
                        <b-form-input id="exampleInput1"
                                      type="text"
                                      v-model="form.namespace"
                                      required
                                      placeholder="Enter Metafield Namespace">
                        </b-form-input>
                    </b-form-group>
                    <b-form-group id="exampleInputGroup2"
                                  label="Metafield Key"
                                  label-for="exampleInput2">
                        <b-form-input id="exampleInput2"
                                      type="text"
                                      v-model="form.key"
                                      required
                                      placeholder="Enter Metafield Key">
                        </b-form-input>
                    </b-form-group>
                    <b-form-group id="exampleInputGroup3"
                                  label="Metafield Value"
                                  label-for="exampleInput3">
                        <b-form-input id="exampleInput3"
                                      type="text"
                                      v-model="form.value"
                                      required
                                      placeholder="Enter Metafield Value">
                        </b-form-input>
                    </b-form-group>
                    <b-form-group id="exampleInputGroup3"
                                  label="Metafield Value Type"
                                  label-for="exampleInput3">
                        <b-form-select id="exampleInput3"
                                       :options="data.value_type_options"
                                       required
                                       v-model="form.food">
                        </b-form-select>
                    </b-form-group>
                    <b-button type="submit" variant="primary">Submit</b-button>
                </div>
            </b-form>
        </div>

        <!--
        <b-card>
            <b-table class="margin-top3"
             v-if="data.metafields.length > 0 "
             striped
             hover
             :items="data.metafields"
             :fields="data.fields">
        </b-table>
            <p v-else class="text-center">
            There are no metafields.
        </p>
        </b-card>
        -->
    </div>
</template>

<script>

    import axios from 'axios';
    import Vue from 'vue';
    import { Card , Button , Table , Modal} from 'bootstrap-vue/es/components';
    import Router from 'vue-router';

    Vue.use(Table);
    Vue.use(Card);
    Vue.use(Modal);
    Vue.use(Button);
    Vue.use(Router);

    export default {
        data(){
            return{
                form:{
                    bulk : [],
                    resource:'',
                    selectedSection : '',
                    show:false,
                    resourceSearchLoading : false,
                    step_one : false,
                    step_two : false,
                    step_three : false,
                    final_step: false,
                    articles:[],
                    blogs:[],
                    collections:[],
                    customers:[],
                    draft_orders:[],
                    orders:[],
                    pages:[],
                    products :[],
                    images:[],
                    variants:[],
                    shop:[]
                },
                data:{
                    section : '',
                    url  : 'https://jookbot.com/metafield/',
                    shop : this.getUrlName( 'shop' , window.location.href ) ,
                    fields: [],
                    metafields: [],
                    options: [
                        { text : '' , value : '' },
                        { text : 'Articles' , value : 'articles' },
                        { text : 'Blogs' , value : 'blogs' },
                        { text : 'Collections' , value : 'collections' },
                        { text : 'Customers' , value : 'customers' },
                        { text : 'Draft Orders' , value : 'draft_orders' },
                        { text : 'Orders' , value : 'orders' },
                        { text : 'Pages' , value : 'pages' },
                        { text : 'Images' , value : 'product_images' },
                        { text : 'Variants' , value : 'product_variants' },
                        { text : 'Products' , value : 'products' },
                        { text : 'Shop' , value : 'shops' },
                    ],
                    value_type_options : [
                        { text : 'Text' , value : 'string' },
                        { text : 'Number' , value : 'integer' }
                    ]
                }
            }
        },
        methods:{
            toggle:function(){
                if( this.form.show === false ) {
                    this.form.show = true;
                    this.form.step_one = true;
                }
                else this.form.show = false;
            },
            capitalizeFirstLetter : function (string) {
                string = string.replace( '_' , ' ' );
                return string.charAt(0).toUpperCase() + string.slice(1)
            },
            selectedSection:function( e ){
                if( e.length === 0 ) return false;

                this.form.selectedSection = e; // this.capitalizeFirstLetter( e ) ;
                this.form.step_two = true;
                let _this = this;

                switch( e.toLowerCase() ){
                    case 'collections':
                        ShopifyApp.Modal.collectionPicker(
                            { selectMultiple : true } ,
                            function( success , data ){
                                _this.processProductCollections( success ,data ) ;
                            });
                        break;
                    case 'products':
                        ShopifyApp.Modal.productPicker(
                            { selectMultiple : false } ,
                            function( success , data ){
                                _this.processProductCollections( success ,data ) ;
                            });
                        break;
                }
            },
            processProductCollections:function(success, data) {
                if(!success) return;

                if ( data.hasOwnProperty( 'products' ) && data.products.length > 0) {
                    let selectedProducts = data.products;
                    this.form.products = selectedProducts ;
                    console.log(selectedProducts);
                }
                if ( data.hasOwnProperty( 'collections' ) && data.collections.length > 0) {
                    let selectedCollections = data.collections;
                    console.log(selectedCollections);
                }

                if (data.errors) {
                    console.error(data.errors);
                }
            },
            onSubmit:function(){},
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
                        title: "Home",
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
                    url : 'home/load?shop=' + shop ,
                } , function( data ){
                    console.log( data ) ;

                });
            },
            bulkSelectHandler:function(){
                if( this.form.bulk.length >= 2 ){
                    this.form.bulk.shift();
                }
                if( this.form.bulk.length === 1  ){
                    let isBulk = this.form.bulk[ 0 ] ;
                    this.form.final_step = isBulk === 'true' ;
                    this.form.step_three = isBulk === 'false' ;
                }
            },
            findResource:function(){
                let resource = this.form.selectedSection,
                    query    = this.form.resource;
                if( query.length === 0 || resource.length ) return false;

                this.form.resourceSearchLoading = true;
            }
        },
        components:{
        },
        updated(){
            this.bulkSelectHandler();
            this.findResource();
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