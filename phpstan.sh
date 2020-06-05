#!/usr/bin/env bash

php vendor/phpstan/phpstan/phpstan analyse -l 0 -c phpstan.neon src
