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
                      <h3 class="panel-title">NUEVO TÉCNICO</h3>
                    </div>
                    <div class="panel-body">
                       	<form>
                       	<div class="row">
                       		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          		<label>NIT</label>
                            	<input type="text" class="form-control text-uppercase" id="nit" name="nit" value="">
                        	</div>
                        	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          		<label>DUI</label>
                            	<input type="text" class="form-control text-uppercase" id="nit" name="nit" value="" pattern="[0-9]{9}">
                        	</div>
                        </div>
                        <div class="row">
                           	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          		<label>Nombre:</label>
                            	<input type="text" class="form-control text-uppercase" id="nombre" name="nombre" value="">
                        	</div>
                        	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          		<label>Apellidos:</label>
                            	<input type="text" class="form-control text-uppercase" id="apellido" name="apellido" value="">
                        	</div>
                        	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          		<label>Telefono:</label>
                            	<input type="text" class="form-control text-uppercase" id="apellido" name="apellido" value="" pattern="[0-9]{9}">
                        	</div>
                        	
                        </div>
						
                       	<div class="row">
                        	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          		<label>Cargo:</label>
                            	<select class="form-control" id="cargo" name="cargo" value="">
                            	 <option selected>Tecnico Supervisor</option>
                            	 
                                 <option selected>Tecnico</option>
                            	
                                </select>
                          </div>  
                        
                         <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <label>Sueldo:</label>
                            <input type="text" class="form-control text-uppercase" name="sueldo" id="sueldo" pattern="[0-9]{4.4}">
                              
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