FROM phpswoole/swoole:4.8.4-php8.0-alpine 

RUN mkdir -p /var/www/swkoa
WORKDIR /var/www/swkoa
COPY . /var/www/swkoa/
RUN composer install

EXPOSE 9501
CMD php /var/www/swkoa/app.php