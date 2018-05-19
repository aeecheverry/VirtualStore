@extends('layout.layout')

@section('content')
<div class="container marginTopContent pt-4 mt-5">
  <div class="col-12 py-1 mt-5">
    <span class="display-4">Pago</span>
  </div>
  <div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="CardHolderID">Cedula</label>  
      <div class="col-md-6">
      <input id="CardHolderID" name="CardHolderID" type="text" placeholder="Ingrese Numero de Cedula" class="form-control input-md" required="">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="CardHolder">Nombre del titular</label>  
      <div class="col-md-6">
      <input id="CardHolder" name="CardHolder" type="text" placeholder="Nombres Apellidos" class="form-control input-md" required="">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="tipo_tarjeta">Seleccione Tipo de Tarjeta</label>
      <div class="col-md-6">
        <select id="tipo_tarjeta" name="tipo_tarjeta" class="form-control">
          <option value="VISA">VISA</option>
          <option value="MASTER CARD">MASTER CARD</option>
          <option value="AMERICAN EXPRESS">AMERICAN EXPRESS</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="CardNumber">Nro. Tarjeta</label>  
      <div class="col-md-6">
      <input id="CardNumber" name="CardNumber" type="text" placeholder="Ingrese Numero de tarjeta" class="form-control input-md" required="">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="ExpirationDate">Fecha de Vencimiento</label>  
      <div class="col-md-6">
      <input id="ExpirationDate" name="ExpirationDate" type="text" placeholder="MM/YYYY" class="form-control input-md" required="">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="State">Estado</label>
      <div class="col-md-6">
        <select id="State" name="State" class="form-control">
          <option value="Amazonas">Amazonas</option>
          <option value="Anzoátegui">Anzoátegui</option>
          <option value="Apure">Apure</option>
          <option value="Aragua">Aragua</option>
          <option value="Barinas">Barinas</option>
          <option value="Bolívar">Bolívar</option>
          <option value="Carabobo">Carabobo</option>
          <option value="Cojedes">Cojedes</option>
          <option value="Delta Amacuro">Delta Amacuro</option>
          <option value="Distrito Capital">Distrito Capital</option>
          <option value="Falcón">Falcón</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="City">Ciudad</label>  
      <div class="col-md-6">
      <input id="City" name="City" type="text" placeholder="Ciudad" class="form-control input-md">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="Amount">Monto</label>  
      <div class="col-md-6">
      <h5>$834.657<h5>  
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton">Procesar Pago</label>
      <div class="col-md-4">
      <a href="/factura" value="pagar" class="form-group btn btn-primary" >Pagar</a>
      </div>
    </div>
  </div>
</div>