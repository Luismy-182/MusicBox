@extends('layouts.layout')

@section('titulo')
Restablece tu password
@endsection

@section('contenido')
<div class="md:flex gap-10">
    <div class="md:w-6/12 flex items-center">
        <picture>
            <source src="{{asset('img/nofx.avif')}}" type="image/avif">
            <source src="{{asset('img/nofx.webp')}}" type="image/webp">
            <img with=300 height="200" loading="lazy" src="{{asset('img/nofx.jpg')}}" alt="Logo de Nofx">
        </picture>
    </div>

    <div class="md:w-4/12 shadow-xl rounded-lg p-6 bg-white">
        <form action="" method="POST">
           @csrf

            <div class="mb-5">
                <label for="email"  class="text-gray-500 block mb-2">Email</label>
                <input type="email" name="email" id="email" placeholder="Tu email" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror ">
                @error('email')
                    <p class="bg-red-500 text-white p-1 text-center mt-2">{{$message}}</p>
                @enderror
            </div>


            

            <input type="submit" value="Enviar instrucciones" class="bg-gray-500 w-full transition-colors rounded-lg text-white p-2 text-center hover:bg-gray-600 cursor-pointer">
        </form>

        <div class="text-center mt-5">
            <p>Te enviaremos un email a tu correo electrónico con las intrucciones.</p>
        </div>
    </div>
</div>
@endsection