@extends('layout.layout')

@section('content')
<div class="container marginTopContent pt-4 mt-5">
    <div class="col-12 py-1 mt-5">
        <span class="display-4">Factura</span>
    </div>
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Producto</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio</th>
        <th scope="col">Titular</th>
        <th scope="col">Cuidad</th>
        <th scope="col">Dirección</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Xiaomi MI 6X</td>
        <td>1</td>
        <td>834.675</td>
        <td>Andrés</td>
        <td>Barranquilla</td>
        <td>Cll 99 N° 11</td>
        </tr>
        
    </tbody>
    </table>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th >Subtotal</th>
        <td >834.675</td>
        </tr>
        <tr>
        <th >Envio</th>
        <td >12435</td>
        </tr>
        <tr>
        <th >Total</th>
        <td >846.700</td>
        </tr>
    </tbody>
    </table>
</div>