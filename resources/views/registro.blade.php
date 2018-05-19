@extends('layout.layout')

@section('content')
<div class="container marginTopContent pt-4 mt-5">
    <div class="row pt-4">
        <div class="col-md-8">
            <section id="loginForm">
                    <h4 class="lead">Registrarte en FINDALL.</h4>
                    <label>Nombre de usuario</label>
                    <div class="form-group">
                        <input class = "form-control col-lg-7"/>
                    </div>
                    <label>Nombre</label>
                    <div class="form-group">
                        <input class = "form-control col-lg-7"/>
                    </div>
                    <label>Apellido</label>
                    <div class="form-group">
                        <input class = "form-control col-lg-7"/>
                    </div>
                    <label>Dirección</label>
                    <div class="form-group">
                        <input class = "form-control col-lg-7"/>
                    </div>
                    <label>Contraseña</label>
                    <div class="form-group">
                        <input type="password" class = "form-control col-lg-7"/>
                    </div>
                    <label>Confimación de contraseña</label>
                    <div class="form-group">
                        <input type="password" class = "form-control col-lg-7"/>
                    </div>
                    <div class="form-group pl-0">
                        <div class="pl-0">
                            <input type="submit" value="Registrarse" class="btn btn-primary my-2" />
                        </div>
                    </div>
                    <p>
                        Ya tiene cuenta<a href="/login">Inicia sesión</a>
                    </p>
            </section>
        </div>
    </div>
</div>