<?php require_once '../layouts/head.php'; ?>

<div class="container">
    <h1 class="page-header text-center">Buscador</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color: rgb(0,0,0,0.30); border-radius: 0.50rem;">
            <table id="myTable" class="table table-bordered table-striped display wrap" width="100%">

                <thead>
                    <th>Imagen</th>
                    <td>Nombre</td>
                    <td>Descripcion del Producto</td>
                    <th>Marca</th>
                    <th>Negocio</th>
                    <th>Precio</th>
                    <th>Fecha de Modificacion</th>
                </thead>

                <tbody>


                    <?php
                    include_once('../conexion/conexion.php');
                    $sql = "SELECT * FROM productos p1, negocio n1, marca m1 WHERE p1.id_negocio = n1.id_negocio AND p1.id_marca = m1.id_marca";

                    $query = $conexion->query($sql);
                    while($row = $query->fetch_assoc()){
                        echo 
                        "<tr>
                        <td><img style='width:100%;' src=".$row['ruta_img']."></td>
                        <td>".$row['nombre']."</td>
                        <td>".$row['desc_produc']."</td>
                        <td>".$row['descrip_marca']."</td>
                        <td>".$row['descrip_negocio']."</td>
                        <td>".$row['precio']."</td>
                        <td>".$row['fecha_modificacion']."</td>";

                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>

<?php require_once '../layouts/footer.php'; ?>