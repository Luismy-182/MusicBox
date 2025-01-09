<?php

namespace App\Http\Livewire;

use App\Models\Artista;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateArtista extends Component
{
    public $nombre;
    public $voz;
    
    public $guitarra1;
    public $guitarra2;
    public $bateria;
    public $bajo;
    public $imagen;
    public $descripcion;

    use WithFileUploads;

    protected $rules=[
        'nombre'=>['required','unique:artistas','min:5','max:100'],
        'voz'=>['required','min:5','max:100'],
        'guitarra1'=>['required','min:5','max:100'],
        'guitarra2'=>['max:100'],
        'bateria'=>['required','min:5','max:100'],
        'bajo'=>['required','min:5','max:100'],
        'imagen'=>['required','image'],
        'descripcion'=>['required','min:5','max:500'],
    ];


    public function createArtista(){
       
        //Valida
        $datos=$this->validate();
       
   
       
        //almacenar la imagen
        $imagen_ruta=$this->imagen->store('public/artistas/'.$this->nombre);

      
        //extraer solo el nombre de la imagen de toda la ruta
        $nombre_imagen=str_replace('public/artistas/'.$this->nombre.'/', '',$imagen_ruta);

      
        //crear el artista, insertando
        Artista::create([
            'nombre'=>$datos['nombre'],
            'voz'=>$datos['voz'],
            'guitarra1'=>$datos['guitarra1'],
            'guitarra2'=>$datos['guitarra2'],
            'bateria'=>$datos['bateria'],
            'bajo'=>$datos['bajo'],
            'imagen'=>$nombre_imagen,
            'descripcion'=>$datos['descripcion'],
        ]);

        



        //crear mensaje de artista creado
        session()->flash('mensaje','El artista se creo correctamente');

        //redireccionar al dashboard
        return redirect()->route('admin.index');
    }

    public function render()
    {
        return view('livewire.create-artista');
    }
}
