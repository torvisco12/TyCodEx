<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Panel de Control</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="icon" href="../assets/img/logo2.jpg" type="image/png" />
</head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- inicio barra lateral -->
        <?php 
            include "component/sidebar.php";
            include 'conexion.php';
            $nbr_students = $con->query("SELECT * FROM students_list");
            $nbr_students = $nbr_students->rowCount();
            $nbr_cours = $con->query("SELECT * FROM courses");
            $nbr_cours = $nbr_cours->rowCount();
            // contar mensajes enviados
            $resultMessages = $con->query("SELECT COUNT(*) AS total FROM mensajes_contacto");
            $rowMessages = $resultMessages->fetch(PDO::FETCH_ASSOC);
            $nbr_messages = $rowMessages['total'];

        ?>
        <!-- fin barra lateral -->
        <!-- inicio contenido de la página -->
        <div class="container-fluid px">
        <?php 
            include "component/header.php";
        ?>
            <div class="cards row gap-3 justify-content-center mt-5">
                <div class="card__items card__items--blue col-md-3 position-relative">
                    <div class="card__students d-flex flex-column gap-2 mt-3">
                        <i class="far fa-graduation-cap h3"></i>
                        <span>Estudiantes</span>
                    </div>
                    <div class="card__nbr-students">
                        <span class="h5 fw-bold nbr"><?php echo $nbr_students; ?></span>
                    </div>
                </div>
                <div 
                    class="card__items card__items--green col-md-3 position-relative" 
                    style="cursor:pointer;"
                    onclick="window.location='Mensajes.php'">
                    <div class="card__messages d-flex flex-column gap-2 mt-3">
                        <i class="far fa-envelope-open h3"></i>
                        <span>Mensajes</span>
                    </div>
                    <div class="card__nbr-messages">
                        <span class="h5 fw-bold nbr"><?php echo $nbr_messages; ?></span>
                    </div>
                </div>
                <div class="card__items card__items--yellow col-md-3 position-relative">
                    <div class="card__payments d-flex flex-column gap-2 mt-3">
                        <i class="fal fa-usd-square h3"></i>
                        <span>Pagos</span>
                    </div>
                    <div class="card__payments">
                        <span class="h5 fw-bold nbr">DHS 556,000</span>
                    </div>
                </div>
                <div class="card__items card__items--gradient col-md-3 position-relative">
                    <div class="card__users d-flex flex-column gap-2 mt-3">
                        <i class="fal fa-user h3"></i>
                        <span>Usuarios</span>
                    </div>
                    <span class="h5 fw-bold nbr">3</span>
                </div>
            </div>
        </div>
        <!-- fin contenido de la página -->
    </main>
    <script src="../js/script.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>
</body>
</html>