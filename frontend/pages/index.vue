<script setup>
import { useI18n } from 'vue-i18n';

const { t } = useI18n();
const { data } = await useAsyncData(`homepage-${t('siteId')}`, () =>
    GqlHomepage({ siteId: t('siteId') })
);
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
