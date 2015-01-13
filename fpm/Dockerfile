FROM ubuntu
MAINTAINER Rob Haswell <rob@clusterhq.com>
RUN apt-get -qy update
RUN apt-get -qy upgrade
RUN apt-get -qy install php5-sqlite php5-fpm
ADD app /app
ADD www.conf /etc/php5/fpm/pool.d/www.conf
RUN mkdir /app/log
RUN chown -R www-data:www-data /app

VOLUME /app
EXPOSE 9000

CMD php5-fpm -F
