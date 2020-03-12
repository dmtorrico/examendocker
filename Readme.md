En esta oportunidad comparto mi primera experiencia con docker compose, mostramos un ejemplo básico de un LEMP, con las siguientes versiones:
    PHP 7.0.33
    NGINX 
    MYSQL 8

Ejecución

1.- Para hacer correr la aplicación se debe realizar:

    docker-compose up -d

2.- En esta ocación se prepararon script para la creación de la Base de Datos, por lo que posteriormente ejecutar las siguientes instrucciones:

    docker container exec -it dockercompose_bd_mysql_1 bash

3.- A continuación creamos la base de datos y cargamos algunos datos;

    Ejecutar en consola lo siguiente:

    mysql -p /docker-entrypoint-initdb.d/init.sql
    mysql -p my_db1 < /docker-entrypoint-initdb.d/init1.sql

4.- El LEMP ya esta listo por lo que accedemos a través de:
    
    http://localhost:8000/

Gracias por tomarse el tiempo de verlo.