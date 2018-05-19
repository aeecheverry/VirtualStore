@extends('layout.layout')

@section('content')
<div class="container marginTopContent pt-4 mt-5">
    <div class="row pt-4">
        <div class="col-md-8">
            <section id="loginForm">
                    <h4 class="lead">Inicia seción en tu cuenta FINDALL.</h4>
                    <label>Nombre de usuario</label>
                    <div class="form-group">
                        <input class = "form-control col-lg-7"/>
                    </div>
                    <label>Contraseña</label>
                    <div class="form-group">
                        <input type="password" class = "form-control col-lg-7"/>
                    </div>
                    <div class="form-group pl-0">
                        <div class="pl-0">
                            <input type="submit" value="Iniciar sesión" class="btn btn-primary my-2" />
                        </div>
                    </div>
                    <p>
                        ¿No tiene cuenta?<a href="/registro">Unetenos!</a>
                    </p>
            </section>
        </div>
    </div>
</div>