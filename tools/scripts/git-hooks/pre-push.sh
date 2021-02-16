#!/bin/bash

set -e

if docker ps | grep -q php-kata-scaffolding; then
    docker-compose exec -T php-kata-scaffolding composer test-all
else
    echo "Are you sure Docker is running?"
fi
