FROM ubuntu
MAINTAINER Rob Haswell <rob@clusterhq.com>
RUN apt-get -qy update
RUN apt-get -qy upgrade
RUN apt-get -qy install nginx
ADD server.conf /etc/nginx/sites-enabled/server.conf
CMD nginx -g 'daemon off;'
