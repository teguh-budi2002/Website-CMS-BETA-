import { createWebHistory, createRouter } from "vue-router";
import View from "../components/ViewComponent.vue";

const routes = [
  {
    path: "/post/:slug",
    name: "View",
    component: View,
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;