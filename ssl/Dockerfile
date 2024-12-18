FROM prestashop/prestashop:1.7.8

RUN apt-get update && apt-get install -y openssl

RUN mkdir -p /etc/apache2/private && mkdir -p /etc/apache2/certs

RUN openssl req -x509 -newkey rsa:4096 -keyout key.pem -out cert.pem \
    -sha256 -days 3650 -nodes \
    -subj "/C=PL/ST=pomorskie/L=Gdansk/O=./OU=./CN=localhost" \
    -addext "basicConstraints=CA:FALSE"

COPY /etc/apache2/private/localhost.key ./localhost.key
COPY /etc/apache2/certs/localhost.crt ./localhost.crt 

RUN chown www-data:www-data /etc/apache2/private/localhost.key /etc/apache2/certs/localhost.crt

COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf

# COPY ./apache2.conf /etc/apache2/apache2.conf

RUN a2enmod ssl && a2ensite 000-default.conf

# CMD ["apache2-foreground"]