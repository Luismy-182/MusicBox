@extends('auth.login')

@section('titulo')
    Validación de cuenta
@endsection

@section('contenido')

<div class="md:flex gap-10">
    <div class="md:w-6/12 flex items-center">
        <picture>
            <source src="{{asset('img/login.avif')}}" type="image/avif">
            <source src="{{asset('img/login.webp')}}" type="image/webp">
            <img with=300 height="200" loading="lazy" src="{{asset('img/login.jpg')}}" alt="Logo de silverstein">
        </picture>
    </div>


    <div class="md:w-4/12 rounded-lg p-6 bg-white">
    @if (session('mensaje'))
        <p>{{session($mensaje)}}</p>
    @else
        <p class="bg-green-500 text-center text-white p-2 text-sm">Cuenta confirmada! Ahora puedes iniciar sesion y disfrutar de tus compras</p>
    @endif
    </div>
</div>
@endsection