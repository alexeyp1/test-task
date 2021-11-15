FROM php:8.0-apache  
RUN sed -i 's/Listen 80/Listen ${PORT}/' /etc/apache2/ports.conf
ENV PORT=8080
COPY app /var/www/html
