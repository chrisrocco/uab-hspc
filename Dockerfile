FROM lamp

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

COPY --chown=www-data:www-data . /var/www/hspc.cs.uab.edu

EXPOSE 80

RUN a2enmod rewrite
CMD service mysql start && apache2ctl -D FOREGROUND
