<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema SPEI</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/style_register.css">
    <link rel="stylesheet" href="public/css/style_nuevo_registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="shortcut icon" href="public/assets/ico-fincomun.ico" type="image/x-icon">
  </head>
</head>
<body>
    <header>
        <div class="container-img"><img class="img_logo-header" src="public/img/Logo_Fincomun.png" alt=""></div>
        <a class="cerrar-sesion" href="../proyecto_tconecta/logout.php">Cerrar sesión</a>
    </header>
    <main class="main-solicitud">
        <div class="form-container">
            <form method="POST" action="blm.php?action=save" enctype="multipart/form-data">
            <div class="left-column">
                <label for="blm">BLMID:</label>
                <input type="number" id="blm" name="num_blm" required>
                </br>
                <label for="descripcion"> DESCRIPCIÓN:</label>
                <textarea type="text" id="descripcion" name="descripcion_blm" required></textarea>

                <label for="comentarios">COMENTARIOS:</label>
                <textarea type="text" id="comentarios" name="comment_blm" required></textarea>
            </div>

            <div class="right-column">
                <label for="monto">MONTO:</label>
                <input type="number" id="monto" name="amount_blm" step="any" required>
                </br>
                <label for="atiende">ATIENDE:</label>
                <input type="text" id="atiende" name="attends_blm" value="Fincomún" readonly required>

                <label for="evidencia">EVIDENCIA:</label>
                <input type="file" id="evidencia" name="evidence_blm" accept="image/*">
                </br>
                <label for="estatus">ESTATUS:</label>
                <select class="form-select from-filtro" name="status_blm" aria-label="Default select example" required readonly>
                        <option selected>Abierto</option>
                        <option value="1">Cerrado</option>
                        <option value="2">Cancelado</option>
                </select>

                <label for="resolucion">RESOLUCIÓN DE FINCOMÚN:</label>
                <input type="text" id="resolucion" name="resolution_fincomun_blm">

                <label for="cuenta" hidden >CUENTA FINCOMÚN:</label>
                <input type="number" id="cuenta" name="account_fincomun" hidden>

                <!-- <label for="fecha">FECHA DE RESOLUCIÓN:</label>
                <input type="date" id="fecha" name="fecha"> -->
            </div>

            <div class="button-group">
                <button type="button" class="btn btn-primary" onclick="location.href='blm.php'">REGRESAR</button>
                <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
            </form>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>