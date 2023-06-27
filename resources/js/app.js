import './bootstrap';
import { createApp } from 'vue';
import App from './components/App';
import router from './router/router';
import store from './store/store';


const app = createApp(App);
app.use(router)
app.use(store)
.mount('#app');

