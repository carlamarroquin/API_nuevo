@extends('main')
@section('css')
<style type="text/css">
.entry:not(:first-of-type)
{
    margin-top: 10px;
}

.glyphicon
{
    font-size: 12px;
}
.text-uppercase{
    text-transform:uppercase;
}
</style>		
@endsection
@section('contenido')
<div class="the-box">
		 <div class="panel panel-primary">
                    <div class="panel-heading" >
                      <h3 class="panel-title">NUEVO CLIENTE</h3>
                    </div>
                    <div class="panel-body">
                       	<form>
                       	<div class="row">
                       		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          		<label>NIT</label>
                            	<input type="text" class="form-control text-uppercase" id="nit" name="nit" value="">
                        	</div>
                        	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          		<label>Número de Registro</label>
                            	<input type="text" class="form-control text-uppercase" id="nit" name="nit" value="" pattern="[0-9]{9}">
                        	</div>
                        </div>
                        <div class="row">
                           	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          		<label>Nombre Comercial:</label>
                            	<input type="text" class="form-control text-uppercase" id="nombre" name="nombre" value="">
                        	</div>
                        	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          		<label>Razon Social:</label>
                            	<input type="text" class="form-control text-uppercase" id="apellido" name="apellido" value="">
                        	</div>
                        	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          		<label>Dirección:</label>
                            	<input type="text" class="form-control text-uppercase" id="apellido" name="apellido" value="">
                        	</div>
                        	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          		<label>Municipio:</label>
                            	<input type="text" class="form-control text-uppercase" id="apellido" name="apellido" value="">
                        	</div>
                        	
                        </div>
						
                       	<div class="row">
                        	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          		<label>telefono:</label>
                            	<input type="text" class="form-control text-uppercase" id="apellido" name="apellido" value="" pattern="[0-9]{9}">                          
                            	</div>  
                        
                         <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <label>email:</label>
                            <input type="text" class="form-control text-uppercase" name="sueldo" id="sueldo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                              
                         </div>  
                        </div>
                 
                        <div alging="center" class="col-xs-2 col-sm-3 col-md-3 col-lg-3">
                            <input type="submit" class="btn btn-primary" id="numregistro" value="Guardar">
                        </div>
                      </div>


                      </form>
                    </div>
              </div>
	</div>
@endsection
@section('js')
@endsection