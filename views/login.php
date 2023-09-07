<?php
session_start();

if (isset($_SESSION['logged'])) {
    header('Location: ativos.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangateca</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/iziToast.min.css">

</head>
<script src="../js/iziToast.min.js" type="text/javascript">
    iziToast.settings({
        timeout: 10000,
        resetOnHover: true,
        icon: 'material-icons',
        transitionIn: 'flipInX',
        transitionOut: 'flipOutX',
        onOpening: function() {
            console.log('callback abriu!');
        },
        onClosing: function() {
            console.log("callback fechou!");
        }
    });
</script>

<body class="bg-primary">
    <?php
    if (isset($_SESSION['try'])) {
        unset($_SESSION['try']);
        echo "<script>
        iziToast.error({
        title: 'Error',
        message: 'Login ou senha incorretos',
        });
        </script>";
    }
    ?>

    <div class="container">
        <div class="bg-dark text-white position-absolute top-50 start-50 translate-middle p-4 rounded">
            <h1>Login</h1>
            <form method="post" action="../controllers/session.php" class="">
                <div class="d-flex flex-column">
                    <label for="">Usuário</label>
                    <input name="nickname" class="form-control" type="text" required>
                    <label for="">Senha</label>
                    <input name="passwordi" class="form-control" type="password" required>
                    <button type="submit" class="btn btn-primary mt-3">Entrar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>