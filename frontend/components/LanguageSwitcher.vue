<script setup></script>

<template>
    <div class="language-switcher">
        <nuxt-link :to="switchLocalePath('en')">EN</nuxt-link>
        <nuxt-link :to="switchLocalePath('fr')">FR</nuxt-link>
    </div>
</template>

<style lang="scss" scoped>
.language-switcher {
    margin-left: 50px;

    a:not(:last-child) {
        margin-right: 10px;
    }
}
</style>
