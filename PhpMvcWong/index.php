<!DOCTYPE html>
<html>
    <head> 
        <meta charset="UTF-8">
        <title>Productos CRUD</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <p/><H2> CRUD DE PRODUCTOS</H2>
        <hr> 
        <?php                            
            include(dirname(__FILE__).'/productos/lib/dao_productos_class.php');
                        echo "<h3 class=\"sub-header\">LISTADO DE PRODUCTOS</h3><br/>";
                        // Recorrer el resource y mostrar los datos:
                        echo "<div class=\"table-responsive\">";
                        echo "<table class=\"table table-striped\">";
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>ID</th>";
                                    echo "<th>NOMBRE</th>";
                                    echo "<th>DESCRIPCION</th>"; 
                                    echo "<th>MARCA</th>";
                                    echo "<th>VALOR</th>";
                                    echo "<th></th>";
                                    echo "<th></th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            $valores= new DaoProductos();
                            $valores->obtenerallProd();
                            if(mysqli_num_rows($valores->getVal())>0)
                            {
                                while ($obj = mysqli_fetch_object($valores->getVal())){
                                        echo "<tr>";
                                        echo "<td>$obj->id</td>";
                                        echo "<td>$obj->nombre</td>";
                                        echo "<td>$obj->descripcion</td>";
                                        echo "<td>$obj->marca</td>"; 
                                        echo "<td>$obj->precio</td>"; 
                                        echo "<td><a href=\"productos/control/controladorproductos.php?accion=del&id=$obj->id\">Elimninar</a></td>";
                                        echo "<td><a href=\"productos/control/controladorproductos.php?accion=act&id=$obj->id\">Actualizar</a></td>";
                                        echo "</tr>"; 
                                    }
                            }
                            echo "</tbody>";
                        echo "</table>"; 
                        echo "</div>"; 
                        echo '<a href="productos/vistas/ingresoprod.html">Ingresar Producto</a>';
                ?>
        <hr>
    </body>
</html>
