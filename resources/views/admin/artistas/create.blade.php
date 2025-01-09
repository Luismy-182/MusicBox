@extends('layouts.admin-layout')

@section('titulo')
    Crear artista
@endsection


@section('contenido')
<h2 class="pt-5">A continuación llena los campos que requieras para crear un nuevo artista</h2>
<p class="text-sm">* campos obligatorios</p>
    <div class=" md:flex md:justify-center p-5">
        
        <livewire:create-artista>
    </div>
@endsection