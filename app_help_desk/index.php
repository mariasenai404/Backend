<!doctype html>
<html lang="en">
<head>
    <!--Inter UI font-->
    <link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">

    <!--vendors styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <!-- Bootstrap CSS / Color Scheme -->
    <link rel="stylesheet" href="css/default.css" id="theme-color">
    <link rel="stylesheet" href="css/back.css">
</head>
<body>

<!--hero header-->
<section class="py-7 py-md-0 bg-hero" id="home">
    <div class="container">
        <div class="row vh-md-100">
            <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
                <h1 class="heading-black text-capitalize">My Landing Page</h1>
                <p class="lead py-3">Aperte o botão e sera direcionado para a pagina de login do app help desk</p>
                <form action="">
                <form action="valida_login.php" method="post">
                    <div class="form-group">
                        <input name="name" type="name" class="form-control" placeholder="Nome" required>
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="E-mail" required>
                    </div>
                    <button class="btn btn-primary d-inline-flex flex-row align-items-center" onclick="location.href='entrar.php'" type="button">
                        App Help Desk
                        <em class="ml-2" data-feather="arrow-right"></em>
                    </button>
                </form>    
            </div>
        </div>
    </div>
</section>
</body>
</html>