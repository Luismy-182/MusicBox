<?php

namespace App\Http\Livewire;

use App\Models\Artista;
use Livewire\Component;

class MostrarArtistas extends Component
{
    public function render()
    {
        //muestra por updated_at de forma descendente
        $artistas=Artista::latest()->get()->take('6');
        
        //$artistas=Artista::all()->get();
        return view('livewire.mostrar-artistas',[
            'artistas'=>$artistas
        ]);
    }
}
