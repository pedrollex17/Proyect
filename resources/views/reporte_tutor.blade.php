@extends('administrador')
@section('admincontent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


      <h1 align="center">Reporte Tutoress</h1><br>
        <div class="container">
          <div class="row table-responsive">
            <table border="1" class="table table-striped table-bordered table-hover table-condensed">

            <tr><th>Clave</th><th>Nombre Alumno</th><th>Apellido Paterno</th><th>Apellido Materno</th></tr>

    @foreach($tutores as $tut)
               
    <tr>
    <td>{{$tut->id_tutores}}</td>
    <td>{{$tut->nom_tutor}}</td>
    <td>{{$tut->ape_pat_tutpr}}</td>
    <td>{{$tut->ape_mat_tutor}}</td>
    <td> <img src= "{{asset('Archivo/'. $tut->archivo)}}"  height = 50 windth=50></td>

    </tr>
                @endforeach
    </table>
            </div>
    </div>
          @stop