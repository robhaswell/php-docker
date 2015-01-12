FROM ubuntu
MAINTAINER Rob Haswell <rob@clusterhq.com>
RUN apt-get -qy update
RUN apt-get -qy upgrade
RUN apt-get -qy install php5-sqlite php5-cli
ADD app /app
