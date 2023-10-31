set -e
echo "Deploying application"

#Enter maintenance mode

(php artisan down --message='The website is been quickly updated. Please tey again in minutes.') || true
  #update codebase
  git pull origin master

composer2 install -q --no-ansi --no-interaction --no-scripts --no-progress --prefer-dist
composer dump-autoload
php artisan optimize
# php artisan migrate --force
#exit maintainance mode
php artisan up

echo "Website deployed"
