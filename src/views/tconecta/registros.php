<!DOCTYPE html>

<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style_register.css">
    <link rel="shortcut icon" href="public/assets/ico-fincomun.ico" type="image/x-icon">
    <title>Sistema SPEI</title>
  </head> 
    
<body>
    <header>
        <div class="container-img"><img class="img_logo-header" src="public/img/Logo-tc.png" alt=""></div>
        
        <section class="header-search search">
                    <form action="blm.php" method="GET" class="d-flex">
                        <input type="hidden" name="action" value="searchForBMDID">
                        <input type="text" name="blmid" class="form-control form-search" placeholder="Buscar por BLMID" required>
                        <button type="submit" class="btn btn-search">
                        <img width="20px" src="public/img/loupe.png" alt=""></button>
                    </form>
        </section>
        <button type="submit" class="btn btn-primary btn-new-registro" onclick="window.location.href='blm.php?action=newRegister'"> Nueva Solicitud</button>
        
        <a href="/proyecto_tconecta/logout.php">Cerrar sesión</a>
        <div class="container-welcome">
            <P class="welcome"><?php echo($_SESSION['user']['name_user'])  ?>! </P>
        </div>

    </header>
    <main class="register-main"> 
        <section class="container-filter"> 

            <form method="POST" action="blm.php?action=Pediente" >
                <label for="date-create" hidden>Fecha:</label>
                <input type="date" id="date-create" name="date_blm" hidden>

                <select name="status_blm" aria-label="Default select example" required hidden>
                        <option selected>Abierto</option>
                        <option value="1">Cerrado</option>
                        <option value="2">Cancelado</option>
                </select>

                <button class="btn btn-warning btn-sm" onclick="location.href='blm.php'" hidden>Buscar</button>
                <button class="btn btn-warning btn-sm" onclick="location.href='blm.php'">Limpiar Registro</button>
            </form>
        </section>
        <section class="container-table">
            <table>
                <thead class="name-thead">
                    <tr>
                        <th>Fecha de creación</th>
                        <th>BLMID</th>
                        <th>Descripción</th>
                        <th>Comentario</th>
                        <th>Monto</th> 
                        <th>Atiende</th>
                        <th>Evidencia</th>
                        <th>Fecha Resolución</th>
                        <th>Estatus</th>
                        <th>Resolución FC</th>
                        <th>Usuario</th>
                        <th>Edición</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $fila): ?>
                        <tr>
                            <td><?= $fila['create_date_blm'] ?></td>
                            <td><?= $fila['num_blm'] ?></td>
                            <td><?= $fila['descripcion_blm'] ?></td>
                            <td><?= $fila['comment_blm'] ?></td>
                            <td> $ <?= $fila['amount_blm'] ?></td>
                            <td><?= $fila['attends_blm'] ?></td>
                            <td><?= $fila['evidence_blm'] ?></td>
                            <td><?= $fila['resolution_date_blm'] ?></td>
                            <td><?= $fila['status_blm'] ?></td>
                            <td><?= $fila['resolution_fincomun_blm'] ?></td>
                            <td><?= $fila['name_user'] ?></td>
                            <td><a href="blm.php?action=edit&id=<?= $fila['id_blm'] ?>" class="btn btn-warning btn-sm">Modificar</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

    </main>
    <footer>
    </footer>
</body>
</html>