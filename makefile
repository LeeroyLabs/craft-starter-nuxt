.PHONY: up dev composer craft boot install

BASE_DIR:=$(shell pwd)

up:
	cd $(BASE_DIR)/backend && ddev exec php craft clear-caches/all --interactive=0
	cd $(BASE_DIR)/backend && ddev exec php craft up
dev: boot up
	if [ ! "$$(grep microsoft /proc/version)" ]; then \
		cd $(BASE_DIR)/backend && ddev launch; \
	fi
	cd $(BASE_DIR)/backend && ddev describe
	cd $(BASE_DIR)/frontend && yarn dev
composer: boot
	cd $(BASE_DIR)/backend && ddev composer \
		$(filter-out $@,$(MAKECMDGOALS))
craft: boot
	cd $(BASE_DIR)/backend && ddev exec php craft \
		$(filter-out $@,$(MAKECMDGOALS))
install: boot
	cd $(BASE_DIR)/backend && ddev exec php craft setup/app-id \
		$(filter-out $@,$(MAKECMDGOALS))
	cd $(BASE_DIR)/backend && ddev exec php craft setup/security-key \
		$(filter-out $@,$(MAKECMDGOALS))
	cd $(BASE_DIR)/backend && ddev exec php craft install \
		$(filter-out $@,$(MAKECMDGOALS))
	cd $(BASE_DIR)/backend && ddev exec php craft plugin/install aws-s3
	cd $(BASE_DIR)/backend && ddev exec php craft plugin/install redactor
	cd $(BASE_DIR)/backend && ddev exec php craft plugin/install seomatic
boot:
	if [ ! "$$(cd $(BASE_DIR)/backend && ddev describe | grep OK)" ]; then \
		cd $(BASE_DIR)/backend && ddev auth ssh; \
		cd $(BASE_DIR)/backend && ddev start; \
		cd $(BASE_DIR)/backend && ddev composer install; \
		cd $(BASE_DIR)/frontend && yarn install; \
	fi
%:
	@:
# ref: https://stackoverflow.com/questions/6273608/how-to-pass-argument-to-makefile-from-command-line
