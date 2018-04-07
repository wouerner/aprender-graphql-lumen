FROM ubuntu:17.10

RUN apt update
RUN apt -y upgrade
RUN DEBIAN_FRONTEND=noninteractive && apt-get install -y php apache2 libapache2-mod-php
RUN DEBIAN_FRONTEND=noninteractive && apt-get install -y php-xdebug sqlite3 
RUN DEBIAN_FRONTEND=noninteractive && apt-get install -y php-curl curl
RUN DEBIAN_FRONTEND=noninteractive && apt-get install -y php-xml
RUN apt update
RUN DEBIAN_FRONTEND=noninteractive && apt-get install -y php-sqlite3 
RUN DEBIAN_FRONTEND=noninteractive && apt-get install -y vim 
RUN a2enmod rewrite
RUN a2enmod headers 

ADD 000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY docker-entrypoint.sh /usr/local/bin/
COPY composer.phar /usr/local/bin/

ENTRYPOINT ["docker-entrypoint.sh"]

