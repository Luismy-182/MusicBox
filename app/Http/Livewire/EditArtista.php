<?php

namespace App\Http\Livewire;

use App\Models\Artista;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class EditArtista extends Component
{
    public $artista_id;
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
        'nombre'=>['required','min:5','max:100'],
        'voz'=>['required','min:5','max:100'],
        'guitarra1'=>['required','min:5','max:100'],
        'guitarra2'=>['max:100'],
        'bateria'=>['required','min:5','max:100'],
        'bajo'=>['required','min:5','max:100'],
        'descripcion'=>['required','min:5'],
    ];



    public function mount(Artista $artista){
        $this->artista_id=$artista->id;
        $this->nombre=$artista->nombre;
        $this->voz=$artista->voz;
        $this->guitarra1=$artista->guitarra1;
        $this->guitarra2=$artista->guitarra2;
        $this->bateria=$artista->bateria;
        $this->bajo=$artista->bajo;
        $this->imagen=$artista->imagen;
        $this->descripcion=$artista->descripcion;

   
    }

   
    public function editArtista(){
        
        $datos=$this->validate();

        //si hay una nueva imagen


        //encontrar la vacante a editar
        $artista=Artista::find($this->artista_id);

   

        //asignar los valores
        $artista->nombre=$datos['nombre'];
        $artista->voz=$datos['voz'];
        $artista->guitarra1=$datos['guitarra1'];
        $artista->guitarra2=$datos['guitarra2'];
        $artista->bateria=$datos['bateria'];
        $artista->bajo=$datos['bajo'];
        $artista->descripcion=$datos['descripcion'];

  
        //Guardar la vacante

        $artista->save();


        //redireccionar
        
        session()->flash('mensaje','Se actualizo el artista correctamente');

        return redirect()->route('admin.index');

    }


    public function render()
    {
        return view('livewire.edit-artista');
    }
}
