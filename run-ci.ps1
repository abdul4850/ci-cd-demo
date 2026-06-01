Write-Host "Installing dependencies..."
composer install

Write-Host "Running tests..."
vendor/bin/phpunit tests

Write-Host "CI Finished"