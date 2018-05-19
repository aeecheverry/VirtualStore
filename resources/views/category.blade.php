@extends('layout.layout')

@section('content')
<div class="container marginTopContent pt-5">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="row text-center menuBar bg-white">
                <a href="" class="nav-item col-12 py-2">Tecnologia</a>
                <a href="" class="nav-item col-12 py-2">Ropa</a>
                <a href="" class="nav-item col-12 py-2">Libros</a>
                <a href="" class="nav-item col-12 py-2">Autos</a>
            </div>
        </div>

        <div class="col-sm-12 col-md-9 col-lg-9 justify-content-center">
            <div class="col-12 my-3">
                <span class="display-4">Productos</span>
            </div>
            <div class="card-deck row">
              
                <!--Plantilla producto-->
                
                    <div class="col-xm-12 col-sm-6 col-md-6 col-lg-4 product-item mb-4">
                        <div class="card productCard shadowCard productCardHover">
                            <a href="/product">
                                <img class="card-img-top" src="https://www.movilzona.es/app/uploads/2018/04/xiaomi-mi-6x.jpg" alt=""/>
                                <h6 class="card-title text-center lead pt-3 pb-2 mb-0 titleProduct">Xiaomi MI 6X</h6>
                            </a>
                            <div class="card-body text-center lead py-0">
                                <span class="small lead">$</span><span class="small lead">834.567</span>
                            </div>
                        </div>
                   </div>

                    <div class="col-xm-12 col-sm-6 col-md-6 col-lg-4 product-item mb-4">
                        <div class="card productCard shadowCard productCardHover">
                            <a href="/product">
                                <img class="card-img-top" src="http://cdn2.autoexpress.co.uk/sites/autoexpressuk/files/styles/article_main_image/public/2018/04/gialloauge_road_dynamic_10.jpg" alt=""/>
                                <h6 class="card-title text-center lead pt-3 pb-2 mb-0 titleProduct">Lamborghini Urus</h6>
                            </a>
                            <div class="card-body text-center lead py-0">
                                <span class="small lead">$</span><span class="small lead">756.834.567</span>
                            </div>
                        </div>
                   </div>

                   <div class="col-xm-12 col-sm-6 col-md-6 col-lg-4 product-item mb-4">
                        <div class="card productCard shadowCard productCardHover">
                            <a href="/product">
                                <img class="card-img-top" src="https://pisces.bbystatic.com/image2/BestBuy_US/images/products/5097/5097501_rd.jpg" alt=""/>
                                <h6 class="card-title text-center lead pt-3 pb-2 mb-0 titleProduct">JBL Charge 3</h6>
                            </a>
                            <div class="card-body text-center lead py-0">
                                <span class="small lead">$</span><span class="small lead">634.756</span>
                            </div>
                        </div>
                   </div>
                   
                   <div class="col-xm-12 col-sm-6 col-md-6 col-lg-4 product-item mb-4">
                        <div class="card productCard shadowCard productCardHover">
                            <a href="/product">
                                <img class="card-img-top" src="https://cnet4.cbsistatic.com/img/FB9uF9_aqnRwYBdblCUiOct9YBY=/770x433/2017/04/03/0051b211-0385-4647-840a-4c6ca1f49d83/hp-spectre-x360-13-inch-2017-07.jpg" alt=""/>
                                <h6 class="card-title text-center lead pt-3 pb-2 mb-0 titleProduct">HP Spectre</h6>
                            </a>
                            <div class="card-body text-center lead py-0">
                                <span class="small lead">$</span><span class="small lead">4.924.310</span>
                            </div>
                        </div>
                   </div>

                   <div class="col-xm-12 col-sm-6 col-md-6 col-lg-4 product-item mb-4">
                        <div class="card productCard shadowCard productCardHover">
                            <a href="/product">
                                <img class="card-img-top" src="https://www.movilzona.es/app/uploads/2018/04/xiaomi-mi-6x.jpg" alt=""/>
                                <h6 class="card-title text-center lead pt-3 pb-2 mb-0 titleProduct">Xiaomi MI 6X</h6>
                            </a>
                            <div class="card-body text-center lead py-0">
                                <span class="small lead">$</span><span class="small lead">834.567</span>
                            </div>
                        </div>
                   </div>

                    <div class="col-xm-12 col-sm-6 col-md-6 col-lg-4 product-item mb-4">
                        <div class="card productCard shadowCard productCardHover">
                            <a href="/product">
                                <img class="card-img-top" src="http://cdn2.autoexpress.co.uk/sites/autoexpressuk/files/styles/article_main_image/public/2018/04/gialloauge_road_dynamic_10.jpg" alt=""/>
                                <h6 class="card-title text-center lead pt-3 pb-2 mb-0 titleProduct">Lamborghini Urus</h6>
                            </a>
                            <div class="card-body text-center lead py-0">
                                <span class="small lead">$</span><span class="small lead">756.834.567</span>
                            </div>
                        </div>
                   </div>

                   <div class="col-xm-12 col-sm-6 col-md-6 col-lg-4 product-item mb-4">
                        <div class="card productCard shadowCard productCardHover">
                            <a href="/product">
                                <img class="card-img-top" src="https://pisces.bbystatic.com/image2/BestBuy_US/images/products/5097/5097501_rd.jpg" alt=""/>
                                <h6 class="card-title text-center lead pt-3 pb-2 mb-0 titleProduct">JBL Charge 3</h6>
                            </a>
                            <div class="card-body text-center lead py-0">
                                <span class="small lead">$</span><span class="small lead">634.756</span>
                            </div>
                        </div>
                   </div>
                   
                   <div class="col-xm-12 col-sm-6 col-md-6 col-lg-4 product-item mb-4">
                        <div class="card productCard shadowCard productCardHover">
                            <a href="/product">
                                <img class="card-img-top" src="https://cnet4.cbsistatic.com/img/FB9uF9_aqnRwYBdblCUiOct9YBY=/770x433/2017/04/03/0051b211-0385-4647-840a-4c6ca1f49d83/hp-spectre-x360-13-inch-2017-07.jpg" alt=""/>
                                <h6 class="card-title text-center lead pt-3 pb-2 mb-0 titleProduct">HP Spectre</h6>
                            </a>
                            <div class="card-body text-center lead py-0">
                                <span class="small lead">$</span><span class="small lead">4.924.310</span>
                            </div>
                        </div>
                   </div>

                   <div class="col-xm-12 col-sm-6 col-md-6 col-lg-4 product-item mb-4">
                        <div class="card productCard shadowCard productCardHover">
                            <a href="/product">
                                <img class="card-img-top" src="https://www.movilzona.es/app/uploads/2018/04/xiaomi-mi-6x.jpg" alt=""/>
                                <h6 class="card-title text-center lead pt-3 pb-2 mb-0 titleProduct">Xiaomi MI 6X</h6>
                            </a>
                            <div class="card-body text-center lead py-0">
                                <span class="small lead">$</span><span class="small lead">834.567</span>
                            </div>
                        </div>
                   </div>

                    <div class="col-xm-12 col-sm-6 col-md-6 col-lg-4 product-item mb-4">
                        <div class="card productCard shadowCard productCardHover">
                            <a href="/product">
                                <img class="card-img-top" src="http://cdn2.autoexpress.co.uk/sites/autoexpressuk/files/styles/article_main_image/public/2018/04/gialloauge_road_dynamic_10.jpg" alt=""/>
                                <h6 class="card-title text-center lead pt-3 pb-2 mb-0 titleProduct">Lamborghini Urus</h6>
                            </a>
                            <div class="card-body text-center lead py-0">
                                <span class="small lead">$</span><span class="small lead">756.834.567</span>
                            </div>
                        </div>
                   </div>

                   <div class="col-xm-12 col-sm-6 col-md-6 col-lg-4 product-item mb-4">
                        <div class="card productCard shadowCard productCardHover">
                            <a href="/product">
                                <img class="card-img-top" src="https://pisces.bbystatic.com/image2/BestBuy_US/images/products/5097/5097501_rd.jpg" alt=""/>
                                <h6 class="card-title text-center lead pt-3 pb-2 mb-0 titleProduct">JBL Charge 3</h6>
                            </a>
                            <div class="card-body text-center lead py-0">
                                <span class="small lead">$</span><span class="small lead">634.756</span>
                            </div>
                        </div>
                   </div>
                   
                   <div class="col-xm-12 col-sm-6 col-md-6 col-lg-4 product-item mb-4">
                        <div class="card productCard shadowCard productCardHover">
                            <a href="/product">
                                <img class="card-img-top" src="https://cnet4.cbsistatic.com/img/FB9uF9_aqnRwYBdblCUiOct9YBY=/770x433/2017/04/03/0051b211-0385-4647-840a-4c6ca1f49d83/hp-spectre-x360-13-inch-2017-07.jpg" alt=""/>
                                <h6 class="card-title text-center lead pt-3 pb-2 mb-0 titleProduct">HP Spectre</h6>
                            </a>
                            <div class="card-body text-center lead py-0">
                                <span class="small lead">$</span><span class="small lead">4.924.310</span>
                            </div>
                        </div>
                   </div>
            </div>
        </div>
    </div>
</div>