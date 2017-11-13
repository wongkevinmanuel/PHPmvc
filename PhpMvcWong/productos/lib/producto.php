<?php
class Producto{
    private $id;
    private $nombre;
    private $descripcion;
    private $marca;
    private $precio;
    
    
    function __construct($_id= null,
        $_nombre= null,
        $_descripcion= null,
        $_marca= null,
        $_precio= null){
        
        $this->id=$_id;
        $this->nombre=$_nombre;
        $this->descripcion=$_descripcion;
        $this->marca=$_marca;
        $this->precio=$_precio;
    }
    
    public function getId(){return $this->id;}
    public function setId($_id){ $this->id=$_id;}
    
    public function getNombre(){return $this->nombre;}
    public function setNombre($_nombre){ $this->nombre=$_nombre;}
    
    public function getDescripcion(){return $this->descripcion;}
    public function setDescripcion($_descripcion){ $this->descripcion=$_descripcion;}
    
    public function getMarca(){return $this->marca;}
    public function setMarca($_marca){ $this->marca=$_marca;}
    
    public function getPrecio(){return $this->precio;}
    public function setPrecio($_precio){ $this->precio=$_precio;}
    
}

