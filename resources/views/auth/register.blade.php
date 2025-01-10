@extends('layouts.layout')
@section('titulo')
    Registrate
@endsection

@section('contenido')
    <div class="md:flex gap-10">
        <div class="md:w-6/12 flex items-center">
            <picture>
                <source src="{{asset('img/register.avif')}}" type="image/avif">
                <source src="{{asset('img/register.webp')}}" type="image/webp">
                <img with=300 height="200" loading="lazy" src="{{asset('img/register.jpg')}}" alt="Logo de silverstein">
            </picture>
        </div>

        <div class="md:w-4/12 shadow-xl rounded-lg p-6 bg-white">
            <form method="POST">
                @csrf
                
                <div class="mb-5">
                    <label for="name" class="text-gray-500 block mb-2">Nombre</label>
                    <input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Tu nombre" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="bg-red-500 text-white text-center p-2 mt-3 text-sm">{{$message}}</p>
                    @enderror
                </div>


                <div class="mb-5">
                    <label for="apellido"  class="text-gray-500 block mb-2">Apellidos</label>
                    <input type="text" name="apellido" value="{{old('apellido')}}" id="apellido" placeholder="Tus Apellidos" class="border p-3 w-full rounded-lg @error('apellido') border-red-500 @enderror  ">
                    @error('apellido')
                        <p class="bg-red-500 text-white text-center p-2 mt-3 text-sm">{{$message}}</p>
                    @enderror
                </div>


                <div class="mb-5">
                    <label for="email"  class="text-gray-500 block mb-2">Email</label>
                    <input type="email" name="email" value="{{old('email')}}" id="email" placeholder="Tu email" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror  ">
                    @error('email')
                        <p class="bg-red-500 text-white text-center p-2 mt-3 text-sm">{{$message}}</p>
                    @enderror
                </div>


                <div class="mb-5">
                    <label for="password"  class="text-gray-500 block mb-2">Password</label>
                    <input type="password" name="password" id="password" placeholder="Tu password" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror  ">
                    @error('password')
                        <p class="bg-red-500 text-white text-center p-2 mt-3 text-sm">{{$message}}</p>
                    @enderror
                </div>



                <div class="mb-5">
                    <label for="password"  class="text-gray-500 block mb-2">Repetir password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repite tu password" class="border p-3 w-full rounded-lg @error('password_confirmation') border-red-500 @enderror">
                    @error('password_confirmation')
                        <p class="bg-red-500 text-white text-center p-2 mt-3 text-sm">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    @if (session('mensaje'))
                        <p class="text-center bg-green-500 p-1 text-sm text-white">{{session('mensaje')}}</p>
                        
                    @endif
                </div>

                <input type="submit" value="Registrarse" class="bg-gray-500 w-full transition-colors rounded-lg text-white p-2 text-center hover:bg-gray-600 cursor-pointer">
            </form>
        </div>
    </div>
@endsection