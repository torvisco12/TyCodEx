<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lista de Estudiantes</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- inicio barra lateral -->
        <?php 
            include "component/sidebar.php";
        ?>
        <!-- fin barra lateral -->
        <!-- inicio contenido de la página -->
        <div class="container-fluid px-4">
        <?php 
            include "component/header.php";
        ?>
          
            <!-- inicio lista de estudiantes -->
            <div class="student-list-header d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Lista de Estudiantes</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="short">
                        <i class="far fa-sort"></i>
                    </div>
                    <?php include 'component/popupadd.php'; ?>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table student_list table-borderless">
                    <thead>
                        <tr class="align-middle">
                            <th class="opacity-0">Vacío</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Número de inscripción</th>
                            <th>Fecha de ingreso</th>
                            <th class="opacity-0">Lista</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          include 'conexion.php';
                          $result = $con -> query("SELECT * FROM students_list");
                          foreach($result as $value):
                        ?>
                      <tr class="bg-white align-middle">
                        <td><img src="../assets/img/<?php echo $value['img'] ?>" alt="img" height="50" width="50"></td>
                                <td><?php echo $value['Name'] ?></td>
                                <td><?php echo $value['Email'] ?></td>
                                <td><?php echo $value['Phone'] ?></td>
                                <td><?php echo $value['EnrollNumber'] ?></td>
                                <td><?php echo $value['DateOfAdmission'] ?></td>
                                <td class="d-md-flex gap-3 mt-3">
                                  <a href="modifier.php?Id=<?php echo $value['Id']?>"><i class="far fa-pen"></i></a>
                                  <a href="remove.php?Id=<?php echo $value['Id']?>"><i class="far fa-trash"></i></a>
                                </td>
                        </tr> 
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- fin lista de estudiantes -->
        </div>
        <!-- fin contenido de la página -->
    </main>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>