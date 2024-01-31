FROM php:8.0.28-apache

RUN sed -ri -e 's!:80>!:8080>!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!Listen 80!Listen 8080!g' /etc/apache2/ports.conf

COPY . /var/www/html

RUN echo "<Directory /var/www/html>" >> /etc/apache2/apache2.conf
RUN echo "  Options Indexes FollowSymLinks" >> /etc/apache2/apache2.conf
RUN echo "  AllowOverride All" >> /etc/apache2/apache2.conf
RUN echo "  Require all granted" >> /etc/apache2/apache2.conf
RUN echo "</Directory>" >> /etc/apache2/apache2.conf

EXPOSE 8080