<?php

//docker-php-ext-install pdo pdo_mysql

const SERVER = "db"; // Utiliza el nombre del servicio del contenedor MySQL como host
const DB = "myDb";
const USER = "root";
const PASS = "test";

const SGBD = "mysql:host=" . SERVER . ";port=3306;dbname=" . DB;