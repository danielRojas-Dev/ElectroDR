        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Inicio</title>
            <meta content="width=device-width, initial-scale=1.0" name="viewport">


            <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../lib/datatables/css/dataTables.bootstrap4.min.css">

            <!-- <link rel="stylesheet" href="assets/css/scrolling-nav.css"> -->
            <link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="../lib/datatables/css/responsive.bootstrap4.min.css">

        </head>
        <body>


            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger" href="index.php">Electro DR</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="../mod_buscador/buscador.php">Buscador</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#">Realizar Presupuesto</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#">Agregar Produtos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="../mod_negocios/index.php">Negocios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="../mod_marcas/index.php">Marcas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <br> <br> <br> <br>
<div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <table id="myTable" class="table table-bordered table-striped display wrap"  width="100%">

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
                                <td>".$row['ruta_img']."</td>
                                <td>".$row['Nombre']."</td>
                                <td>".$row['DescProduc']."</td>
                                <td>".$row['descrip_marca']."</td>
                                <td>".$row['descrip_negocio']."</td>
                                <td>".$row['precio']."</td>
                                <td>".$row['fecha_modificacion']."</td>
                                
                                ";

                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="../lib/datatables/js/jquery.dataTables.min.js"></script>
<script src="../lib/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="../lib/datatables/js/dataTables.responsive.min.js"></script>
<script src="../lib/datatables/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/js/data_table.js"></script>
<!-- <script src="assets/js/scrolling-nav.js"></script> -->


</body>
</html>