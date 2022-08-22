<script setup></script>

<template>
    <div>
        <Head>
            <Title>404 page</Title>
        </Head>

        <h1>{{ $t('404.title') }}</h1>

        <NuxtLink :to="localePath('/')">{{ $t('404.cta') }}</NuxtLink>
    </div>
</template>
