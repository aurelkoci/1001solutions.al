import "./bootstrap";
import "../css/app.css";

import { createApp, h } from "vue";
import { createInertiaApp, Head, Link } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/vue.m";
import { i18nVue } from "laravel-vue-i18n";
import { createPinia } from "pinia";
import VueClickAway from "vue3-click-away";
const appName = import.meta.env.VITE_APP_NAME || "1001Solutions";
const pinia = createPinia();
createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("Link", Link)
            .component("Head", Head)
            .use(pinia)
            .use(VueClickAway)
            .use(i18nVue, {
                lang: "sq",
                resolve: (lang) => {
                    const langs = import.meta.glob("../../lang/*.json", {
                        eager: true,
                    });
                    return langs[`../../lang/${lang}.json`].default;
                },
            })
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: "#4B5563",
    },
});
