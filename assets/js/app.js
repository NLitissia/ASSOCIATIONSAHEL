/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
import Vue from 'vue';
// any CSS you import will output into a single css file (app.css in this case)
import '../styles/app.css';

// start the Stimulus application
import '../bootstrap';
import NavBar from './components/NavBar.vue';
import FormLogin from './components/FormLogin.vue';
require("mdbvue/lib/css/mdb.min.css");
require("bootstrap-css-only/css/bootstrap.min.css");

Vue.component("navbar", NavBar);
Vue.component("formlogin", FormLogin);

new Vue({
    el: "#app",
    components: {
        NavBar,
        FormLogin
    }
}).$mount("#app");