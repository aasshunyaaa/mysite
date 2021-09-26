require('./bootstrap');
require('./bootstrap');

window.Vue = require('vue');
// 追加
Vue.component('sample-component', require('./components/SampleComponent.vue').default);

const app = new Vue({
    el: '#app'
});
