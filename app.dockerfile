FROM ubuntu:latest

# Install Apache, PHP, and required modules
RUN apt-get update && \
	apt-get -y upgrade && \
	apt-get -y install apache2 libapache2-mod-php7.0 \
	php7.0 php7.0-mysql php7.0-mbstring \
	curl

# Enable Apache modules
RUN a2enmod php7.0 && a2enmod rewrite

# Copy project files into place (should already be built)
COPY --chown=www-data:www-data . /var/www/hspc.cs.uab.edu

# Set file permissions
WORKDIR /var/www/hspc.cs.uab.edu
RUN chgrp -R www-data storage bootstrap/cache
RUN chmod -R ug+rwx storage bootstrap/cache

# Use our own apache vhost
COPY vhost.conf /etc/apache2/sites-available/000-default.conf

# Start Apache
CMD apache2ctl -D FOREGROUND
