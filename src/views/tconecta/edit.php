
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

<body>
    <header>
        <div class="container-img"><img class="img_logo-header" src="public/img/Logo-tc.png" alt=""></div>
        <a class="cerrar-sesion" href="../proyecto_tconecta/logout.php">Cerrar sesión</a>      
    </header>
    <main class="main-solicitud">
        <div class="form-container">
            <form method="POST" action="blm.php?action=getUpdate" enctype="multipart/form-data">
            <div class="left-column">
                <input type="hidden" name="id" value="<?= htmlspecialchars($registro['id_blm']) ?>">
                <label for="date-create">Fecha de creacion:</label>
                <input type="date" id="date-create" name="create_date_blm" value="<?= $registro['create_date_blm'] ?>" readonly >
                <label for="blm">BLMID:</label>
                <input type="number" id="blm" name="num_blm" value="<?= $registro['num_blm'] ?>"  required>
                </br>
                <textarea name="descripcion_blm" id="descripcion" required><?= htmlspecialchars($registro['descripcion_blm']) ?></textarea>

                <textarea name="comment_blm" id="comentarios" required><?= htmlspecialchars($registro['comment_blm']) ?></textarea>

            </div>

            <div class="right-column">
                <label for="monto">MONTO:</label>
                <input type="number" id="monto" name="amount_blm" step="any" value="<?= $registro['amount_blm'] ?>" required>
                </br>
                <label for="atiende">ATIENDE:</label>
                <input type="text" id="atiende" name="attends_blm" value="<?= $registro['attends_blm'] ?>" required readonly>

                <label for="evidencia">EVIDENCIA:</label><br>
                 <?php if (!empty($registro['evidence_blm'])): ?>
                    <img src="src/uploads/<?= htmlspecialchars($registro['evidence_blm'])?>" alt="Evidencia" style="max-width: 300px;" onclick="mostrarImagen(this.src)">
                <?php else: ?>
                    <p>No hay imagen disponible.</p>
                <?php endif; ?>

                <input type="hidden" name="imagen_actual" value="<?= htmlspecialchars($registro['evidence_blm']) ?>">
                <input type="file" id="evidencia" name="evidence_blm" accept="image/*">

                </br>
                <label for="estatus">ESTATUS:</label>
                <select class="form-select from-filtro" name="status_blm" required>
                    <option value="Abierto" <?= $registro['status_blm'] == 1 ? 'selected' : '' ?>>Abierto</option>
                </select>


                <label for="resolucion">RESOLUCIÓN DE FINCOMUN:</label>
                <input type="text" id="resolucion" name="resolution_fincomun_blm" value="<?= $registro['resolution_fincomun_blm'] ?>" readonly>

                <label for="cuenta" hidden>CUENTA FINCOMUN:</label>
                <input type="number" id="cuenta" name="account_fincomun" value="<?= $registro['account_fincomun'] ?>" hidden>

                <label for="fecha">FECHA DE RESOLUCIÓN:</label>
                <input type="date" id="fecha" name="resolution_date_blm" value="<?= htmlspecialchars($registro['resolution_date_blm']) ?>" readonly >

            </div>

            <div class="button-group">
                <button type="button" class="btn btn-primary" onclick="location.href='blm.php'">REGRESAR</button>
                <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
            </form>
        </div>

    </main>


    <div id="modalImagen" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.8); justify-content:center; align-items:center; z-index:1000;">
        <img id="imagenAmpliada" src="" style="max-width:90%; max-height:90%;">
    </div>
    <script>
        function mostrarImagen(src) {
            const modal = document.getElementById('modalImagen');
            const img = document.getElementById('imagenAmpliada');
            img.src = src;
            modal.style.display = 'flex';

            modal.onclick = function () {
                modal.style.display = 'none';
            };
        }
    </script>
    <footer></footer>

</body>
</html>