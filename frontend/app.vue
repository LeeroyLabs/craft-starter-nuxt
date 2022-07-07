<script setup>
useHead({
    titleTemplate: 'Nuxt App - %s',
    viewport: 'width=device-width, initial-scale=1, maximum-scale=1',
    charset: 'utf-8',
    meta: [{ name: 'description', content: 'My amazing site.' }],
    bodyAttrs: {
        class: 'test',
    },
});
</script>

<template>
    <div>
        <TheHeader />
        <div>
            <NuxtPage />
        </div>
    </div>
</template>
