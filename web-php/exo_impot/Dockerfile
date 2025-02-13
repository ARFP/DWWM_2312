FROM debian:bookworm 

RUN apt update 
RUN apt install -y apache2 php8.2

WORKDIR /var/www/html

RUN rm ./index.html

COPY ./index.php ./
COPY ./model/Contribuable.php ./model/

EXPOSE 80

ENTRYPOINT apache2ctl -D FOREGROUND