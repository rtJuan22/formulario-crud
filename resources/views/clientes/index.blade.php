@extends('layout/template')

@section('title','Formulario')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Listado de clientes</h2>
        <a href="{{ url ('clientes/create') }}"class='btn btn-primary btn-sm'>Nuevo registro</a>
    </div>
</main>