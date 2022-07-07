<script setup></script>

<template>
    <header class="header">
        <div class="site-name">
            <NuxtLink :to="localePath('/')">
                <img src="/nuxt.svg" alt="" width="64" height="64" />
            </NuxtLink>
            <div>Nuxt3 x Craft starter</div>
        </div>

        <nav class="navigation">
            <NuxtLink :to="localePath('about')">About</NuxtLink>
            <LanguageSwitcher />
        </nav>
    </header>
</template>

<style lang="scss" scoped>
.header {
    width: 100%;
    height: 64px;
    background-color: #eee;
    display: flex;
    justify-content: space-around;
    align-items: center;

    .site-name,
    .navigation {
        display: flex;
        align-items: center;
    }
}
</style>
