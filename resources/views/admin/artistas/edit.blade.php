@extends('layouts.admin-layout')
@section('titulo')
    editando artista 
@endsection


@section('contenido')
<h2 class="pt-5">A continuación llena los campos que requieras para crear un nuevo artista</h2>
<p class="text-sm">* campos obligatorios</p>
    <div class=" md:flex md:justify-center p-5">
        
        <livewire:edit-artista :artista="$artista">
    </div>
@endsection