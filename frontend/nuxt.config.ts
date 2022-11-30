import { defineNuxtConfig } from 'nuxt';
import en from './i18n/en.json';
import fr from './i18n/fr.json';

// https://v3.nuxtjs.org/api/configuration/nuxt.config
export default defineNuxtConfig({
    modules: ['nuxt-graphql-client', '@nuxtjs/i18n'],
    css: ['@/assets/styles/main.scss'],
    publicRuntimeConfig: {
        'graphql-client': {
            clients: {
                default: {
                    token: {
                        name: 'X-Craft-Token',
                    },
                },
            },
        },
    },
    i18n: {
        locales: ['en', 'fr'],
        defaultLocale: 'en',
        pages: {
            about: {
                en: '/about-us',
                fr: '/a-propos',
            },
        },
        vueI18n: {
            legacy: false,
            locale: 'en',
            fallbackLocale: 'en',
            messages: {
                en,
                fr,
            },
        },
    },
});
