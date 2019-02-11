#!/usr/bin/env bash

set -exo pipefail

if [[ ${XDEBUG_ENABLED:-"false"} == "true" ]] ; then
    echo "WARNING: XDEBUG LOADED!"
    echo "         xdebug being loaded on production even if its not enabled at all degrades performance!!"
    docker-php-ext-enable xdebug
else
    echo "NOTE: You can enable manually xdebug by running 'docker-php-ext-enable xdebug'"
    echo "      and signaling apache with 'kill -SIGUSR1 <apache_pid>' to refresh the process."
    echo "      Also, you can start the container with XDEBUG_ENABLED=true to start it automatically"
fi

#if [[ ${SKIP_MIGRATIONS:-0} == 0 ]] ; then
  su -s /bin/bash -c './bin/console doctrine:migrations:migrate --no-interaction -e prod' --  www-data
#fi

if [ "$@" ]; then
  exec $@
else
  php-fpm
fi
