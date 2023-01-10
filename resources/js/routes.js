
const routes = {
    mode: "history",

    routes: [
        {
            path: "/",
            name: "home",
            component: () => import("./pages/Home.vue"),
        },
        
    ],
};
export default routes;