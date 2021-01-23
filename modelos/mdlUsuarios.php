<?php 

include_once "conexion.php";

class Usuarios{

    public static function mdlInsertarUsuarios($nombres, $apellidos, $usuario, $clave){

        $resultado = false;
        $objRespuesta = conexion::conectar()->prepare("INSERT INTO usuarios (nombre, apellido, usuario, pass) VALUES ('$nombres', '$apellidos', '$usuario', '$clave')");
        
        if($objRespuesta->execute()){
            $resultado = true;
        }
        return $resultado; 
    }
}