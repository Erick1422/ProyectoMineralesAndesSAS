<?php 

class conexion {

    public static function conectar(){

        $servidor = "localhost";
        $bd = "dbmineralesandes";
        $user = "root";
        $pas = "";
        $conec = null;

        try{
            $conec = new PDO('mysql:host='.$servidor.';dbname='.$bd.';', $user, $pas);
            $conec->exec("set names utf8");
        }
        catch(Exception $e){
            $conec = $e;
        }
        return $conec;
    }
}
