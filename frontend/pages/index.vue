<script setup>
const { data } = await useAsyncData('homepage', () => GqlHomepage());
</script>

<template>
    <div>
        <Head>
            <Title>Main page</Title>
        </Head>

        <h1>{{ data.entry.heroBannerText }}</h1>

        <p>{{ $t('homepage.title') }}</p>
    </div>
</template>
