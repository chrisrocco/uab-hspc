while ! mysqladmin ping -h"$DB_HOST" --silent; do
    sleep 1
done

php artisan migrate

apache2ctl -D FOREGROUND