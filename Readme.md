En esta oportunidad comparto mi primera experiencia con docker compose, mostramos un ejemplo básico de un LEMP, con las siguientes versiones:
    PHP 7.0.33
    NGINX 
    MYSQL 8

Modificaciones
--
  - Se agrego el archivo .env con las variables de entorno, estas son accesibles para ambos contendrores
  - Se agrego my.cnf que se monta en /etc/mysql/ para evitar el problema de : 'The server requested authentication method unknown to the client [caching_sha2_password] in' o 'The server requested authentication method unknown to the client'

Ejecución

1.- Para hacer correr la aplicación se debe realizar:

    docker-compose up -d


2.- El LEMP ya esta listo por lo que accedemos a través de:
    
    http://localhost:8000/
