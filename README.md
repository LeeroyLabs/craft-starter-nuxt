# Craft Starter Nuxt

Starter running on Nuxt 3 with headless Craft CMS

## Local machine prerequisites:

1. [Docker](https://www.docker.com/)
2. [DDEV](https://ddev.readthedocs.io/)
3. [Composer](https://getcomposer.org/)

# Overview

## Craft CMS

Located in the `backend` folder, it's pre-configured to be headless.  
We need **Craft Pro** for GraphQL.  
Remember to add your sections to the Public Schema of GraphQL.

## Nuxt 3

Located in the `frontend` folder.  
Configured to get data from Craft using _nuxt-graphql-client_ ([documentation](https://nuxt-graphql-client.web.app/)).  
Localization with _i18n_ ([documentation](https://v8.i18n.nuxtjs.org/)).

# Create a new project with this starter

1. Open terminal prompt, and run:

```shell
composer create-project leeroy/craft-starter-nuxt PATH --no-install
```

2. Edit _backend/.ddev/config.yaml_ file and change the `name` (`php_version` or `database` if needed).
3. Then to install a clean version of Craft, run:

```shell
make install
```

4. Follow the prompts (DDEV helped filling the _.env_ file)

Once the process is complete, type `make dev` to start developing on the project. 🚀

The command above will automatically:

1. Copy your local SSH keys into the container
2. Start your DDEV project
3. Install Composer
4. Install yarn
5. Generate `APP_ID` and save to your `.env` file
6. Generate `SECURITY_KEY` and save to your `.env` file
7. Installing Craft for the first time, allowing you to set the admin's account credentials
8. Install all Craft plugins

# Developing on an existing project

```shell
make dev
```

This command will automatically:

1. Copy your local SSH keys into the container
2. Start your DDEV project
3. Install Composer
4. Install yarn
5. Spin up the Nuxt server
6. Output a `ddev describe` to show the project domain
7. Open up the browser (for MacOS users)

Open up a browser to your project domain (something like `xxxx.ddev.site`) to verify that Vite is connected. Begin crafting beautiful things. ❤️

## Databases

Export a database with:

```shell
cd backend && ddev export-db > ./dumpfile.sql.gz
```

Import a database with:

```shell
cd backend && ddev import-db < dumpfile.sql.gz
```

You can also use DDEV's included phpMyAdmin for database imports — just be aware it's much slower.

## Makefile

A Makefile has been included to provide a unified CLI for common development commands.

-   `make install` - Runs a complete one-time process to set the project up and install Craft.
-   `make boot` - Starts the DDEV project, ensuring that SSH keys have been added, and npm & Composer have been installed.
-   `make up` - Runs the Craft commands to clear cache and load the yaml configuration files. It's done also when running one of the `make dev` commands
-   `make dev` - Runs a one-time build of all front-end assets, then starts Vite's server for HMR.
-   `make composer xxx` - Run Composer commands inside the container, e.g. `make composer install`
-   `make craft xxx` - Run Craft commands inside the container, e.g. `make craft project-config/touch`

# DDEV

[Using the 'ddev' command](https://ddev.readthedocs.io/en/stable/users/basics/cli-usage/)

Make sure that nothing else is running at the same time (Apache or other Docker-based environment).  
To turn off Lando:

```shell
lando poweroff
```
