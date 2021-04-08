<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="lib/datatables/css/dataTables.bootstrap4.min.css">

    <!-- <link rel="stylesheet" href="assets/css/scrolling-nav.css"> -->
    <link rel="stylesheet" type="text/css" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="lib/datatables/css/responsive.bootstrap4.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Electro DR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Personas
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="mod_barrios/index.php">Barrios</a>
                                <a class="dropdown-item" href="mod_proveedores/index.php">Proveedores</a>
                                <a class="dropdown-item" href="#">Empleados</a>
                            </div>
                        </li>

                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Articulos
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="mod_tip_articulos/index.php">Tipo de Articulos</a>
                                <a class="dropdown-item" href="#">Articulos</a>
                                <a class="dropdown-item" href="mod_formas_pagos/index.php">Formas de pago</a>
                                <a class="dropdown-item" href="mod_unida_medidas/index.php">Unidad de Medidas</a>
                            </div>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#">Ventas</a>
                    </li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Usuarios
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="mod_tip_usuario/index.php">Tipos de Usuarios</a>
                                <a class="dropdown-item" href="mod_est_usuario/index.php">Estado de Usuarios</a>
                                <a class="dropdown-item" href="#">Usuario</a>
                            </div>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
    <br> <br> <br> <br>

    
    <div class="container">
        <h1 class="page-header text-center">Barrios</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
                <div class="row col-sm-12">
                    <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="fa fa-plus"></span> Nuevo Barrio</a>
                </div>
                <br>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <table id="myTable" class="table table-bordered table-striped display wrap"  width="100%">

                            <thead>
                                <td>ID Barrio</td>
                                <td>Descripcion Barrio</td>
                                <th>Detalle</th>
                                <th>Modificar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>


                                <?php
                                include_once('conexion/conexion.php');
                                $sql = "SELECT * FROM barrios";

                                $query = $conexion->query($sql);
                                while($row = $query->fetch_assoc()){
                                    echo 
                                    "<tr>
                                    <td>".$row['id_barrio']."</td>
                                    <td>".$row['desc_barrios']."</td>
                                    <td>
                                    <a href='#detalle_".$row['id_barrio']."' class='btn btn-success form-control' data-toggle='modal'><span class='fa fa-search'></span></a>
                                    </td>";

                                    echo "<td>
                                    <a href='#edit_".$row['id_barrio']."' class='btn btn-warning form-control' data-toggle='modal'><span class='fa fa-pencil'></span></a>
                                    </td>";
                                    echo "<td> <a href='#delete_".$row['id_barrio']."' class='btn btn-danger form-control' data-toggle='modal'><span class='fa fa-trash'></span></a>
                                    </td>
                                    </tr>
                                    ";
                                    include('edit_delete_modal.php');
                                    include 'detalle.php';
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="lib/datatables/js/jquery.dataTables.min.js"></script>
        <script src="lib/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="lib/datatables/js/dataTables.responsive.min.js"></script>
        <script src="lib/datatables/js/responsive.bootstrap4.min.js"></script>
        <script src="assets/js/data_table.js"></script>
        <!-- <script src="assets/js/scrolling-nav.js"></script> -->
        
        

    </body>
    </html>