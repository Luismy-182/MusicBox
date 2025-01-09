<?php

namespace App\Http\Livewire;

use App\Models\Artista;
use Livewire\Component;

class MostrarArtistas extends Component
{
    public function render()
    {
        $artistas=Artista::all()->take('6');
        
        //$artistas=Artista::all()->get();
        return view('livewire.mostrar-artistas',[
            'artistas'=>$artistas
        ]);
    }
}
