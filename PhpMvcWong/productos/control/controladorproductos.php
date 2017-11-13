<?php  
include('../lib/dao_productos_class.php');
include'../lib/producto.php';

////////////////////
/////Eliminar
///////////////////
if($_GET["accion"] == "del"){
    $id=$_GET["id"];
    $daoprod= new DaoProductos();
    $vand=$daoprod->Eliminar($id);
    if($vand == 0){header('Location: http://localhost/PhpMvcWong/index.php');}
    else {echo 'Error al elminar registro';}
}

////////////////////
/////Insertar
///////////////////
if(isset($_POST['actingr'])){
     $id=$_POST["id"];
     $nombre=$_POST["nom"];
     $descripcion=$_POST["des"];
     $marca=$_POST["mar"];
     $precio=$_POST["prec"];
     $daoprod= new DaoProductos();
    $vand=$daoprod->Registrar($id,$nombre,$descripcion,$marca,$precio);
    if($vand == 0){ 
        header('Location: http://localhost/PhpMvcWong/index.php'); 
    }
    else {
        //Cargar algo como template o algo
        echo 'Error al registrar el producto'; 
    } 
}


////////////////////
/////Actualizar
///////////////////
if(isset($_POST['actact'])){
     $id=$_POST["id"];
     $nombre=$_POST["nom"];
     $descripcion=$_POST["des"];
     $marca=$_POST["mar"];
     $precio=$_POST["prec"];
     $daoprod= new DaoProductos();
     $vand=$daoprod->Actualizar($id,$nombre,$descripcion,$marca,$precio);
    if($vand == 0){
        header('Location: http://localhost/PhpMvcWong/index.php'); 
    }
    else {
        //Cargar algo como template o algo
        echo 'Error al registrar el producto'; 
    } 
}
if($_GET["accion"] == "act"){
    //Datos para cargar en plantilla de Actualizar
    $diccionario = array(
         'Titulo'=>'CRUD Productos Actualizar',
         'Descripcion'=>'Actualizar el producto',
         'Mensaje'=>' '
     ); 
    
    //Obtener datos a actualizar
    $datosprod; 
    $valores= new DaoProductos();
     $valores->obtenerProducto($id=$_GET["id"]);
     if(mysqli_num_rows($valores->getVal())>0)
     {while ($obj = mysqli_fetch_object($valores->getVal())){
             $datosprod = array(
                 'id'=> $obj->id,
                 'nombre'=> $obj->nombre,
                 'descripcion'=> $obj->descripcion,
                 'marca'=> $obj->marca,
                 'precio'=> $obj->precio,
             ); 
      }}
    //Datos para plantilla
    $datosCompletos= array_merge($diccionario,$datosprod);
    //Cargar datos en actualizarprod.html
    $template = file_get_contents('../vistas/actualizarprod.html');
     foreach ($datosCompletos as $clave=>$valor){
         $template = str_replace('{'.$clave.'}', $valor, $template);
     }
    // Mostrar
     print $template;
}
