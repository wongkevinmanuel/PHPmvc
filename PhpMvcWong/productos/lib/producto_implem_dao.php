<?php
interface ImplemDao{
    public function obtenerallProd();
    public function obtenerProducto($id);
    public function Eliminar($id);
    public function Registrar($id,$nombre,$descripcion,$marca,$precio);
    public function Actualizar($id,$nombre,$descripcion,$marca,$precio);     
}

    
    
    
    

