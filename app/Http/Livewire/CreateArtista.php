<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Artista;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Http\Requests\ArtistaRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

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



    protected function rules(): array 
    {
        return (new ArtistaRequest())->rules(); //mandamos a llamar el metodo con sus reglas para validar
    } 

    public function storeImage(){
            if(!$this->imagen){
                return '';
            }

           
    }

    public function createArtista(){
       
        //Valida
        $datos=$this->validate();
       
        //intervention image

        $image=$this->storeImage();

        // //almacenar la imagen
        // $imagen_ruta=$this->imagen->store('public/artistas/'.$this->nombre);

      
        // //extraer solo el nombre de la imagen de toda la ruta
        // $nombre_imagen=str_replace('public/artistas/'.$this->nombre.'/', '',$imagen_ruta);

      
        //crear el artista, insertando
        Artista::create([
            'nombre'=>$datos['nombre'],
            'voz'=>$datos['voz'],
            'guitarra1'=>$datos['guitarra1'],
            'guitarra2'=>$datos['guitarra2'],
            'bateria'=>$datos['bateria'],
            'bajo'=>$datos['bajo'],
            'imagen'=>$image, //$nombre_imagen,
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
