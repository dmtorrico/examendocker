FROM webdevops/php-nginx:debian-9
COPY miweb /app
CMD ["supervisord"]
