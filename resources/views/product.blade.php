@extends('layout.layout')

@section('content')
<div class="container marginTopContent pt-4 mt-5">
    <div class="row">
        <!--aquí carusel de las imagenes del producto-->
        <div class="col-sm-12 col-md-5 py-3">
            <div class="row">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active py-2">
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="py-2">
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="py-2">
                        </li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="https://www.proandroid.com/wp-content/uploads/2018/04/xXiaomi-redmi-note-5-pro.jpeg.pagespeed.ic.q9QXgd4LAM.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="https://www.movilzona.es/app/uploads/2018/04/xiaomi-mi-6x.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="https://cdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-mi-a2-mi-6x-2.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="col-12">
                    <!--aqui puede ir algo más esto está debajo del carrousel-->
                </div>
            </div>
        </div>


        <!--contenedor información del producto-->
        <div class="col-sm-12 col-md-6 py-3">
            <!--Nombre del vendedor-->
            <div class="py-2">
                <span class="text-muted">
                    Seller:
                </span><a href="/product" class="">Nombre usuario vendedor</a>
            </div>
            <!--Calificación del produto-->
            <span class="text-muted align-middle">Rating: </span><span class="text-muted align-middle pl-2">4.3</span>

            <!--Título del producto-->
            <h3 class="pt-1 text-normal">Xiaomi MI 6X</h3>

            <!--Precio del producto-->
            <div class="h3">
                <span class="text-muted">Precio: </span><span class="px-2">$843.657</span>
            </div>

            <!--Unidades disponibles-->
            <div class="form-group">
                <span class="text-muted">Unidades disponibles: </span><span class="">134</span>
            </div>

            <!--Descripción del producto-->
            <div class="form-group">
                <span class="text-muted">Descripción: </span><p class="my-2 form-group">Mejor telefono gama media alta premium del mercado 2018</p>
            </div>

            <div class="row mt-1 pb-0">
                <div class="form-group col-sm-4 form-group">
                    <label for="quantity">Quantity: </label>
                    <input type="number" class="form-control form-group" name="quantity" id="quantity" min="1" max="134" value="1">
                </div>
                
                <!--Metodo de envío-->
                <div class="form-group col-sm-6">
                    <span class="text-muted">Envío: </span><span class="px-2">DHL Express - 3 a 5 días</span>
                </div>
            </div>
            <div class="row my-0 justify-content-between mt-0 mb-1">
                <!--Categoria a la que pertenece-->
                <div class="form-group col-sm-6">
                    <span class="text-muted">Categoría:</span>
                    <a class="navi-link" href="/category">Tecnología</a>
                </div>
                <!--Identificador del producto-->
                <div class="form-group col-sm-6">
                    <span class="text-muted">Id:</span><span class="px-2">0478458689</span>
                </div>
            </div>

            <div class="row my-0 py-0">
                <!--Boton de comprar o o ofrecer se cambia De Buy Now a Offer si está en modo subasta-->
                <div class="col-md-3">
                    <a href="/pago" value="Comprar" class="form-group btn btn-primary" >Comprar</a>
                </div>       
            </div>
        </div>

    </div>
</div>