
require('./bootstrap');

window.Vue = require('vue').default;
import { createApp } from 'vue'
import router from './routes/index'
const app = createApp({})

app.component('loader-component', require('./components/LoaderComponent.vue').default);
app.component('view-component', require('./components/ViewComponent.vue').default);
app.mount('#app');
app.use(router)