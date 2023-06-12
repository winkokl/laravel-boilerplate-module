echo "Deploy started"
cd /var/www/padesar
git pull origin master
composer install -n
php artisan migrate --force
php artisan config:clear
echo "Deploy finished at master file"
