@extends('administrador')
@section('admincontent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   
<center><h1>Alta Grupo</h1></center>

			
			
			<div align="center">
                <div class='col-sm-4'> </div>
                <div class='col-sm-4'> 
                    <form role="form" action="{{route('guardagrupo')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}

				@if($errors->first('id_grupo'))
		        <i> {{ $errors->first('id_grupo') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_grupo">ID:</label>
				<input type="text" placeholder="Folio..." name="id_grupo" value="{{$id_grupos}}" readonly='readonly' class='form-control'><br>
				</div>

				@if($errors->first('grupo'))
		        <i> {{ $errors->first('grupo') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="grupo">Grupo:</label>
				<input type="text" placeholder="Nombre..." name="grupo" value="{{old('grupo')}}" class='form-control'><br>
				</div>
                        
                  @if($errors->first('archivo'))
                <i>{{$errors->first('archivo')}}</i>
                @endif <br>
                
                selecciona foto: <input type="file" name="archivo"> <br>
                
                
				 
              
				<!--<input type="submit" value="Guardar">
				<!--<input type="submit" value="Cancelar">-->
				<br><button value="Guardar" class='btn btn-md btn-success'> Guardar </button>
				<button value="Cancelar" class='btn btn-md btn-danger'> Cancelar </button>
			</form>
                </div>
                <div class='col-sm-4'> </div>
                
    </div>
 @stop