import './bootstrap';
import { createApp } from "vue";
import router from './router';
import index from "./components/index.vue";

const app = createApp({});
app.component('index',index);
app.use(router).mount("#app");