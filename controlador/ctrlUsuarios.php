<?php 

include_once "../modelos/mdlUsuarios.php";

class clUsuarios{

    public $idUsuario;
    public $nombre;
    public $apellido;
    public $usuario;
    public $pass;

    public function InsertarUsuarios()
    {
        $objRespuesta = Usuarios::mdlInsertarUsuarios($this->nombre, $this->apellido, $this->usuario, $this->pass);
        echo $objRespuesta;
    }
}

if(isset($_POST["insertarNombres"]) && isset($_POST["insertarApellidos"]) && isset($_POST["insertarusuario"]) && isset($_POST["insertarPass"])){

    $objInsertar = new clUsuarios();
    $objInsertar->nombre = $_POST["insertarNombres"];
    $objInsertar->apellido = $_POST["insertarApellidos"];
    $objInsertar->usuario = $_POST["insertarusuario"];
    $objInsertar->pass = $_POST["insertarPass"];

    $objInsertar->InsertarUsuarios();

}