#!/usr/bin/env bash

php vendor/phpstan/phpstan/bin/phpstan analyse -l 0 -c phpstan.neon src
