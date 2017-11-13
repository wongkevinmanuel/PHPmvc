<?php

include('abstract_db_class.php');
include('producto_implem_dao.php');


class DaoProductos extends Abstract_db implements ImplemDao
{
    private $valores;
    
    function __construct() {
        $this->valores;
    }
    
    public function obtenerallProd()
    {
        $sentencia="Select * from producto";
        $this->setVal(parent::result_ejecutar_sql($sentencia));
    } 
    public function obtenerProducto($id){
        $sentencia="Select * from producto WHERE producto.id='".$id."'";
        $this->setVal(parent::result_ejecutar_sql($sentencia));
    }
    public function Eliminar($id){
        $row_afect=0;
        $sentencia="DELETE FROM producto WHERE producto.id='".$id."'";
        $row_afect= parent::update_sql($sentencia);
        return $row_afect;
    }
    public function Registrar($id,$nombre,$descripcion,$marca,$precio){
        $row_afect=0;
        $sentencia="INSERT INTO producto(id,nombre,descripcion,marca,precio)
                    VALUES ('".$id."','".$nombre."','".$descripcion."','".$marca."','".$precio."')";
        $row_afect= parent::update_sql($sentencia);
        return $row_afect;
    }
   // public function Actualizar(Producto $producto){
    public function Actualizar($id,$nombre,$descripcion,$marca,$precio){
        $row_afect=0;
        $sentencia="UPDATE producto SET nombre='".$nombre."',descripcion='".$descripcion."',marca='".$marca."',precio='".$precio."' WHERE producto.id='".$id."'";
        $row_afect= parent::update_sql($sentencia);
        return $row_afect;
    }
    
    public function getVal(){return $this->valores;}
    public function setVal($valoress){        $this->valores= $valoress;}
}

