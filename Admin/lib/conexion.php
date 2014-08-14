<?php

    class Conectar
    {
        public static function Conexion()
        {
            $server = 'localhost';
            $user = 'tonyman';
            $password ='tonyman';
            $db = 'db_innditec';
            
            $con = mysql_connect($server,$user,$password)or die("Error de conexion");
            mysql_select_db($db);
            return $con;
            
        }
    }

?>
