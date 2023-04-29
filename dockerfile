FROM php:7.4-cli
COPY . .
EXPOSE 8080
ENTRYPOINT ["php", "index.php"]