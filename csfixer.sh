#!/usr/bin/env bash
php -n -c build/php.ini vendor/friendsofphp/php-cs-fixer/php-cs-fixer -V
php -n -c build/php.ini vendor/friendsofphp/php-cs-fixer/php-cs-fixer fix --config=.php_cs --verbose --show-progress=estimating $@
