FROM prestashop/prestashop:1.7.8

COPY ./prestashop /var/www/html

RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

COPY ./configuration/certs /etc/ssl/certs
COPY ./configuration/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf

RUN chown -R root:root /etc/ssl/certs /etc/apache2/sites-available && \
    chmod 777 /etc/ssl/certs && \
    chmod 777 /etc/apache2/sites-available/default-ssl.conf

RUN a2enmod ssl && \
    a2ensite default-ssl.conf

RUN rm -rf /var/www/html/install

EXPOSE 443
CMD ["apache2-foreground"]