
    <form class="space-y-5 md:w-5/12 shadow-xl p-5" method="POST" wire:submit.prevent='editArtista' enctype="multipart/form-data">

        <div>
            <label for="nombre"  class="text-gray-500 block mb-2">Nombre del artista *</label>
            <input type="text" wire:model="nombre" value="{{old('nombre')}}" id="nombre" placeholder="Nombre de artista o banda" class="border p-3 w-full rounded-lg @error('nombre') border-red-500 @enderror  ">

            @error('nombre')
            <livewire:mostrar-alertas :message="$message">
            @enderror
        </div>

        <div>
            <label for="voz"  class="text-gray-500 block mb-2">Nombre del vocalista *</label>
            <input type="text" wire:model="voz" value="{{old('voz')}}" id="voz" placeholder="Nombre de vocalista" class="border p-3 w-full rounded-lg @error('voz') border-red-500 @enderror  ">

            @error('voz')
            <livewire:mostrar-alertas :message="$message">
            @enderror
        </div>

        <div>
            <label for="guitarra1"  class="text-gray-500 block mb-2">Nombre del primer guitarrista *</label>
            <input type="text" wire:model="guitarra1" value="{{old('guitarra1')}}" id="guitarra1" placeholder="Nombre del primer guitarrista" class="border p-3 w-full rounded-lg @error('guitarra1') border-red-500 @enderror  ">

            @error('guitarra1')
            <livewire:mostrar-alertas :message="$message">
            @enderror
        </div>
        <div>
            <label for="guitarra2"  class="text-gray-500 block mb-2">Nombre del segundo guitarrista</label>
            <input type="text" wire:model="guitarra2" value="{{old('guitarra2')}}" id="guitarra2" placeholder="Nombre del segundo guitarrista" class="border p-3 w-full rounded-lg @error('guitarra2') border-red-500 @enderror  ">

            @error('guitarra2')
            <livewire:mostrar-alertas :message="$message">
            @enderror
        </div>

        <div>
            <label for="bateria"  class="text-gray-500 block mb-2">Nombre del baterista *</label>
            <input type="text" wire:model="bateria" value="{{old('bateria')}}" id="bateria" placeholder="Nombre del baterista" class="border p-3 w-full rounded-lg @error('bateria') border-red-500 @enderror  ">

            @error('bateria')
            <livewire:mostrar-alertas :message="$message">
            @enderror
        </div>
        <div>
            <label for="bajo"  class="text-gray-500 block mb-2">Nombre del bajista *</label>
            <input type="text" wire:model="bajo" value="{{old('bajo')}}" id="bajo" placeholder="Nombre del bajista" class="border p-3 w-full rounded-lg @error('bajo') border-red-500 @enderror  ">

            @error('bajo')
            <livewire:mostrar-alertas :message="$message">
            @enderror
        </div>
    

        <div>
            <label for="descripcion"  class="text-gray-500 block mb-2">Descripcion de la banda *</label>
            <textarea wire:model="descripcion" id="descripcion" class="w-full h-72 border rounded-md shadow-sm @error('descripcion') border-red-500 @enderror"></textarea>


            @error('descripcion')
            <livewire:mostrar-alertas :message="$message">
            @enderror
        </div>

        <div>
            <label for="imagen" class="text-gray-500 block mb-2">Imagen banda *</label>
            <input type="file" accept="image/*" class="block mt-1 w-full" wire:model="imagen">

            <div class="my-5 w-90">
                <p>Imagen actual: </p>
                <img class="w-full aspect-square object-cover " src="{{ asset('storage/artistas/'.$nombre.'/'. $imagen)}}"  alt="imagen {{$nombre}}">
            </div>

{{-- 
            <div class="my-5 w-90">
                @if($imagen)
                    Nueva Imagen:
                    <img src="{{$imagen->temporaryUrl() }}" alt="Imagen de banda">
                @endif
            </div> --}}
        </div>
        <input type="submit" class="bg-indigo-500 hover:bg-indigo-700 cursor-pointer p-2 text-white rounded-md w-full" value="Actualizar artista"></input>
    </form>
