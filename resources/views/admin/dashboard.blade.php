@extends('layouts.admin-layout')
@section('titulo')
    Dashboard
@endsection

@section('contenido')
<div>
    <h2 class="font-bold text-xl mb-5">Artistas más recientes</h2> 
    
    @if (session()->has('mensaje'))
        <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3">{{session('mensaje')}}</div>
    @endif

    <livewire:mostrar-artistas>
    
    <div class="text-center p-5 shadow font-bold ">
        <a href="#">Ver todos los artistas</a>   
    </div>
    
  
</div>

<div >
    <h2 class="font-bold text-xl mb-5">Albums más recientes</h2>
</div>

@endsection