
/* require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';
import Buefy from 'buefy'


Vue.use(Buefy)

var App = new Vue({
    el: '#app'
}); */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));


require('./bootstrap');
import Vue from 'vue';
import Buefy from 'buefy';

Vue.use(Buefy, { defaultIconPack: 'fa' });
window.Vue = Vue;

var App = new Vue({
    el: '#app',
    data:{
        auto_password:'',
        password_options: ''
    }
});


$(document).ready(function(){
    $('button.dropdown').hover(function(e){
        $(this).toggleClass('is-open');
    });
});


