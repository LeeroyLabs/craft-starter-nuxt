# Nuxt Craft Starter

Nuxt 3 with headless Craft CMS

## Craft CMS

In `backend` folder  
Configured to be headless  
Craft Pro because we need GraphQL  

```
cd backend
lando composer install
```


## Nuxt 3

In `frontend` folder  
Configured to get data from Craft using _nuxt-graphql-client_  
i18n for localization

```
cd frontend
yarn
yarn dev
```