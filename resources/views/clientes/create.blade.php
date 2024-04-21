@extends('layout/template')

@section('title','Registrar cliente')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Registrar cliente</h2>

        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
             <ul>
               @foreach($errors->all() as $error)
               <li>{{$error}}</li>
               @endforeach
             </ul>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>  
        @endif

        <form action="{{url('clientes')}}" method="post">

          @csrf

          <div class="mb-3 row">

          <label for="usuario" class="col-sm-2 col-form-label">Usuario:</label>
          <div class="col-sm-5">
             <input type="text"  class="form-control" name="usuario" id="usuario" value="{{old ('usuario')}}" required>
          </div>
          </div>

          <div class="mb-3 row">

<label for="primernombre" class="col-sm-2 col-form-label">Primer Nombre:</label>
<div class="col-sm-5">
   <input type="text"  class="form-control" name="primernombre" id="primernombre" value="{{old ('primernombre')}}" required>
</div>
</div>


<div class="mb-3 row">

<label for="segundonombre" class="col-sm-2 col-form-label">Segundo Nombre:</label>
<div class="col-sm-5">
   <input type="text"  class="form-control" name="segundonombre" id="segundonombre" value="{{old ('segundonombre')}}" required>
</div>
</div>

<div class="mb-3 row">

<label for="primerapellido" class="col-sm-2 col-form-label">Primer Apellido:</label>
<div class="col-sm-5">
   <input type="text"  class="form-control" name="primerapellido" id="primerapellido" value="{{old ('primerapellido')}}" required>
</div>
</div>


<div class="mb-3 row">

<label for="segundoapellido" class="col-sm-2 col-form-label">Segundo Apellido:</label>
<div class="col-sm-5">
   <input type="text"  class="form-control" name="segundoapellido" id="segundoapellido" value="{{old ('segundoapellido')}}"required >
</div>
</div>


<div class="mb-3 row">

<label for="fecha_nacimiento" class="col-sm-2 col-form-label">Fecha_nacimiento</label>
<div class="col-sm-5">
   <input type="date"  class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="{{old ('fecha_nacimiento')}}" required>
</div>
</div>

<div class="mb-3 row">

<label for="genero" class="col-sm-2 col-form-label">Genero</label>
<div class="col-sm-5">
  <select name="genero" id="genero" class= "form-select" required>

    <option value="">Seleccionar Genero</option>
            @foreach($datos as $dato)
            <option value="{{$dato->id}}">{{$dato->nombre}}</option>
            @endforeach
  </select>
</div>

</div>
<div class="mb-3 row">

<label for="tipoDocumento" class="col-sm-2 col-form-label">Tipo de Documento:</label>
<div class="col-sm-5">
<input type="text"  class="form-control" name="tipoDocumento" id="tipoDocumento" value="{{old ('tipoDocumento')}}"required >

</div>

</div>

<div class="mb-3 row">

<label for="telefono" class="col-sm-2 col-form-label">Telefono:</label>
<div class="col-sm-5">
   <input type="text"  class="form-control" name="telefono" id="telefono" value="{{old ('telefono')}}" required>
</div>
</div>

<div class="mb-3 row">

<label for="email" class="col-sm-2 col-form-label">Email:</label>
<div class="col-sm-5">
   <input type="text"  class="form-control" name="email" id="email" value="{{old ('email')}}" >
</div>
</div>
         <a href="{{url ('clientes')}}" class="btn btn-secondary">Regresar</a>

           <button type="submit" class="btn btn-success">Guardar</button>
        </form>

    </div>
</main>