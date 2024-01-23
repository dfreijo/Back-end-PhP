<?php

    include("/var/www/html/PHPCraftP2/config/SERVER.php");

    class connection {

        /*--------- Funcion conectar a BD ---------*/
        public static function conectar(){
            $conexion = new PDO(SGBD, USER, PASS);
            $conexion->exec("SET CHARACTER SET utf8");
            return $conexion;
        }

        /*--------- Funcion ejecutar consultas simples ---------*/
        public static function ejecutar_consulta($consulta){
            $sql = self::conectar()->prepare($consulta);
            $sql->execute();
            return $sql;
        }
    }

