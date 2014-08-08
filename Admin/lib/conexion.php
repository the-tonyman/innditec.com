<?php

    class Conectar
    {
        public static function Conexion()
        {
            $server = 'localhost';
            $user = 'root';
            $password ='';
            $db = 'innditec_db';
            
            $con = mysql_connect($server,$user,$password)or die("Error de conexion");
            mysql_select_db($db);
            return $con;
            
        }
    }

?>
