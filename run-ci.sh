#!/bin/bash

echo "Installing dependencies..."
composer install

echo "Running tests..."
vendor/bin/phpunit tests

echo "CI Finished"