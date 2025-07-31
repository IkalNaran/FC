<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema SPEI</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="shortcut icon" href="public/assets/ico-fincomun.ico" type="image/x-icon">
  </head>
    <script type="module" src="public/js/main.js"></script>
</head>
<body>
    <header>

    </header>
    <main>
        <section class="container_login">
            <section class="container_email_pass">
                <img class="img_logo" src="public/img/logo-fincomun.png" alt="">
                
                <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

                <form class="form-login" method="POST">
                    <div class="mb-3">
                        <label for="user" class="form-label">Correo o usuario</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text">Puedes ocupar tu correo o email</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div class="container-btn">
                        <button type="submit" class="btn btn-primary">INGRESAR</button>
                    </div>
                    
                </form>
            </section>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>