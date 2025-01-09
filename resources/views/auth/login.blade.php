@extends('layouts.layout')
@section('titulo')
    Inicia sesión
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

        <div class="md:w-4/12 shadow-xl rounded-lg p-6 bg-white">
            <form  method="POST">
               @csrf
            
                <div class="mb-5">
                    <label for="email"  class="text-gray-500 block mb-2">Email</label>
                    <input type="text" name="email" id="email" placeholder="Tu email" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="bg-red-500 text-white p-1 text-center">{{$message}}</p>
                    @enderror
                </div>


                <div class="mb-5">
                    <label for="password"  class="text-gray-500 block mb-2">Password</label>
                    <input type="password" name="password" id="password" placeholder="Tu password" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror ">
                    @error('password')
                        <p class="bg-red-500 text-white p-1 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5 flex items-center gap-1">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Mantener sesión</label>

                </div>


                <input type="submit" value="Iniciar sesión" class="bg-gray-500 w-full transition-colors rounded-lg text-white p-2 text-center hover:bg-gray-600 cursor-pointer">
            </form>

            <div class="text-center mt-5">
                <a href="{{route('passwordReset.index')}}">¿Olvidaste tu contraseña?</a>

                @if (session('mensaje'))
                <p class="text-center p-1 bg-red-500 text-white mt-2">{{session('mensaje')}}</p>
                @endif
            </div>
        </div>
    </div>
@endsection