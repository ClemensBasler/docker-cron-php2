FROM php:7.2-fpm-alpine

# copy crontabs for root user
COPY ./src/crontab /etc/crontabs/root
COPY . .
# RUN chmod +x ./src/time.php
# start crond with log level 8 in foreground, output to stderr
CMD ["crond", "-f", "-d", "8"]
