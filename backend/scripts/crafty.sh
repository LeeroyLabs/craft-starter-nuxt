#!/bin/bash

php craft clear-caches/all --interactive=0
php craft migrate/all --interactive=0
php craft project-config/apply --interactive=0
