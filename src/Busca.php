<?php
session_start();
$usuario = $_SESSION['usuario'];

// Verifique se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Busca | ALUMNI FACOM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Portal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
</head>

<body>

    <nav class="navbar navbar-light navbar-expand-md" style="background: #f2f2f2; font-family: Roboto;">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="margin-left: 45px;">ALUMNI FACOM
                UFU</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                    class="visually-hidden">Mudar navegação</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="background: #f2f2f2;">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="Alumni.php">Início</a></li>
                </ul>
                <div class="ms-auto d-flex align-items-center" style="margin-right: 10px;">
                    <div class="dropdown ms-auto">
                        <a class="btn btn-secondary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 0%;">
                            <span>Bem-vindo,
                                <?php echo $_SESSION["usuario"]; ?>
                            </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="Alumni.php">Meu Perfil</a></li>
                            <li><a class="dropdown-item" href="Editar-perfil.php">Editar Dados</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item " role="button" id='botao-logout' style="color: red"
                                    href="Login.html">Sair</a></li>
                        </ul>
                    </div>
                    </ul>
                </div>
            </div>
    </nav>
    <div class="wrapper">
        <div class="content">
            <div>
                <h1 style="color: #F8AB02; margin: 40px">Encontre alumnus!</h1>
            </div>

            <!-- Formulário de busca -->
            <form method="get" action="" id="form-busca" style="margin:40px">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pesquisar usuários" name="termo-busca" id="termo-busca">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </form>

            <div id="resultados-busca" style="margin:40px"></div>

           
        </div>
    </div>

    <!-- Start: Footer Basic -->
    <footer class="footer-basic" style="padding-bottom: 15px;padding-top: 30px;">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Início</a></li>
            <li class="list-inline-item"></li>
            <li class="list-inline-item"><a href="Institucional.html">Sobre</a></li>
            <li class="list-inline-item"></li>
            <li class="list-inline-item"><a href="Institucional.html">Política de Privacidade</a></li>
        </ul>
        <p class="copyright">FACOM | Universidade Federal de Uberlândia © 2023</p>
    </footer><!-- End: Footer Basic -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="assets/js/Logout.js"></script>
    <script src="assets/js/Busca.js"></script>


</body>

</html>