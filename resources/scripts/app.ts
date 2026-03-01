import "../css/app.css";

import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { createApp, type DefineComponent, h } from "vue";

createInertiaApp({
    title: (title) => (title ? `${title} - Laravel` : "Laravel"),
    resolve: (name) =>
        resolvePageComponent(
            `../pages/${name}.vue`,
            import.meta.glob<DefineComponent>("../pages/**/*.vue"),
        ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
    progress: {
        color: "#2D63F8",
    },
});
