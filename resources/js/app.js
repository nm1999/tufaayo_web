import './bootstrap';
import { createApp } from "vue";
import router from './router';
import index from "./components/index.vue";

createApp(index).use(router).mount("#app");