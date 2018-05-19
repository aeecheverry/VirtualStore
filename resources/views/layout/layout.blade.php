<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <title>Store</title>
</head>
<body style="background-color: #eee;">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand lead" href="/">FINDALL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarUltra" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-100" id="navbarUltra">
                <form action="" method="post" class="form-inline my-0 my-lg-0 pl-0 col justify-content-md-center">
                    <input class="form-control ml-0 mr-2 w-50" type="text" placeholder="Search" aria-label="Search" id="bus" name="keyWords" />
                    <a class="btn btn-outline-primary my-0 my-sm-0" style="color:white;">Buscar</button>
                </form>
                <a href="/login" class="mr-1 justify-content-right">Iniciar sesion</a>
                <a href="/registro" class="mr-1 justify-content-right">Registrate</a>
            </div>
        </div>
    </nav>
    @yield('content')
    <!--el footer-->
    <footer class="bg-warning pt-5 pb-2 mt-4 w-100 text-light" style="position:absolute;bottom:auto;left:0px">
        <div class="container">
            <div class="row col-12">
                <div class="col-lg-4 col-md-6">
                    <!--Información de contacto-->
                    <section>
                        <h3 class="widget-title text-uppercase">Acercate a nosotros</h3>
                        <hr/>
                        <p class="">Telefono: 00 000 000 000</p>
                        <p>
                            <a class="navi-link-light" href="#">support@findall.com</a>
                        </p>
                    </section>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!--AboutUs-->
                    <section>
                        <h3 class="widget-title text-uppercase">Acerca de nosotros</h3>
                        <hr />
                        <div class="row">
                            <a href="#" class="nav-item col-12 py-1">Carreras</a>
                            <a href="#" class="nav-item col-12 py-1">About AMBShop</a>
                            <a href="#" class="nav-item col-12 py-1">Nuestra historia</a>
                            <a href="#" class="nav-item col-12 py-1">Servicios</a>
                        </div>
                    </section>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-7 pb-1">
                    <!-- Payment Methods-->
                    <img src="http://i2.wp.com/www.metodosdepago.com/wp-content/uploads/metodos-de-pago-online.jpg" width="250px" height="100px" alt="Payment Methods" class="img-fluid py-4">
                </div>
                <div class="col-5 pb-1">
                    <!--Subscription-->
                    <div class="row">
                        <input class="col-7 text-light my-4 py-3" type="text" name="canjear" placeholder="$20000" style="border-radius:20px">
                        <input type="submit" class="btn btn-primary col-4 my-4 py-3 ml-1" style="border-radius:20px" />
                    </div>
                    <span class="text-light">Suscribete a nuestras promociones</span>
                </div>
            </div>
            <hr/>


            <!-- Copyright-->
            <p class="footer-copyright">© All rights reserved.</p>
        </div>
    </footer>
<body>
<html>