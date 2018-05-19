@extends('layout.layout')

@section('content')
<div class="container body-content marginTopContent mt-5">
    <!--Carrousel-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner " role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="https://http2.mlstatic.com/resources/exhibitors/MCO-TuCarro-Carros-de-lujo/ff8760e0-5471-11e8-8206-3d5e65b3d6ea-home-slider_desktop.jpg" alt="First slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="https://http2.mlstatic.com/resources/exhibitors/MCO-lluvia/496df9f0-5493-11e8-8aa1-336c59ce5de9-home-slider_desktop.jpg" alt="Second slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="https://http2.mlstatic.com/resources/exhibitors/MCO-pre-mundial/cd0c9310-548f-11e8-bd40-a13e7258346f-home-slider_desktop.jpg" alt="Third slide" />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container ">
        <div class="row justify-content-center">

            <!--Título categorias-->
            <div class="col-12 py-1 my-3">
                <span class="display-4">Categorías</span>
            </div>

            <div class="row">
                <!--Contenedor cartas de categorias -->
                <div class="card-deck" id="categoriesContainer">
                    <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card shadowCard categoriesCard categoriesCardHover">
                            <a href="/category">
                                <img class="card-img-top" src="https://d2giyh01gjb6fi.cloudfront.net/default/0002/15/thumb_114122_default_big.jpeg" alt="@classification.CategoryTitle" />
                                <h5 class="card-title titleCategories py-3 my-0 text-center">Tecnology</h5>
                            </a>
                            <p class="text-justify px-3 py-1 m-0 descriptionCategories">¿Quieres ultima tecnología? entra aquí</p>
                        </div>
                    </div>

                    <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card shadowCard categoriesCard categoriesCardHover">
                            <a href="/category">
                                <img class="card-img-top" src="https://stylelovely.com/wp-content/uploads/marcas_ropa_juvenil-736x412.jpg" alt="@classification.CategoryTitle" />
                                <h5 class="card-title titleCategories py-3 my-0 text-center">Ropa</h5>
                            </a>
                            <p class="text-justify px-3 py-1 m-0 descriptionCategories">¿Quieres estár a la moda? entra aquí</p>
                        </div>
                    </div>

                    <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card shadowCard categoriesCard categoriesCardHover">
                            <a href="/category">
                                <img class="card-img-top" src="https://http2.mlstatic.com/lote-de-5-libros-scouts-de-baden-powell-nuevos-D_NQ_NP_289905-MLM25088287792_102016-F.jpg" alt="@classification.CategoryTitle" />
                                <h5 class="card-title titleCategories py-3 my-0 text-center">Libros</h5>
                            </a>
                            <p class="text-justify px-3 py-1 m-0 descriptionCategories">¿Eres un lector apacionado? entra aquí</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 py-1 my-3">
                <span class="display-4">Productos destacado</span>
            </div>

            <!--Contenedor cartas de productos destacados-->
            <div class="card-deck justify-content-center">
                    <div class="col-xm-12 col-sm-6 col-md-4 col-lg-4 mb-4">
                        <div class="card productCard shadowCard productCardHover">
                            <a href="">
                                <img class="card-img-top" src="https://compass-ssl.xbox.com/assets/9d/d6/9dd668c3-63f8-4e5b-8f69-17a9b74aeb70.jpg?n=X1S-1TB_Content-Placement-0_Console-hub_99_740x417.jpgs" alt="@p.Name" />
                                <h6 class="card-title text-center lead pt-3 pb-2 mb-0 titleProduct">Xbox one S</h6>
                            </a>
                            <div class="card-body text-center lead py-0">
                                <span class="small lead">$</span><span class="small lead">1.123.000</span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</div>



