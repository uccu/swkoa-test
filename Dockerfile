FROM phpswoole/swoole:4.8.4-php8.0-alpine 

RUN mkdir -p /var/www/swkoa
WORKDIR /var/www/swkoa
COPY . /var/www/swkoa/
RUN composer install

EXPOSE 9501
CMD php /var/www/swkoa/app.php

# docker run -d --name swkoa --net http --ip 172.18.0.2 -v /home/log:/var/www/swkoa/log swkoa-test:1.0