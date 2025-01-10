<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtistasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artistas')->insert([
            'nombre' => 'blink-182',
            'voz' => 'Tom Delonge / Mark Hoppus',
            'guitarra1' => 'Tom Delonge',
            'bateria' => 'Travis Barker',
            'bajo' => 'Mark Hoppus',
            'descripcion' => 'Blink-182 es una banda estadounidense de Rock/pop punk, formada el 2 de agosto de 1992 por Tom DeLonge, Mark Hoppus, y Scott Raynor en Poway, California. Son considerados los pioneros del pop punk y una de las bandas que contribuyó a su éxito masivo internacional a finales de los 1990 y principios de los 2000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('artistas')->insert([
            'nombre' => 'Silverstein',
            'voz' => 'Shane Told',
            'guitarra1' => 'Josh Bradford',
            'guitarra2' => 'Paul Marc Rousseau',
            'bateria' => 'Paul Koehler',
            'bajo' => 'Billy Hamilton',
            'descripcion' => 'Silverstein es una banda musical canadiense de post-hardcore, conformada por Shane Told, Paul Marc Rousseau, Josh Bradford, Billy Hamilton y Paul Koehler. Fue formada en Burlington, Ontario. Su nombre corresponde al autor de literatura infantil Shel Silverstein.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('artistas')->insert([
            'nombre' => 'Box Car Racer',
            'voz' => 'Tom Delonge',
            'guitarra1' => 'Tom Delonge',
            'guitarra2' => 'David Kennedy',
            'bateria' => 'Travis Barker',
            'bajo' => 'Anthony Celestino',
            'descripcion' => 'Box Car Racer fue una banda estadounidense de pop punk formada en 2001 por Tom DeLonge como proyecto alternativo a Blink-182. La banda se influenció por Jawbox, Quicksand, Fugazi y Refused, según DeLonge.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('artistas')->insert([
            'nombre' => 'NOFX',
            'voz' => 'Fat Mike / El Hefe',
            'guitarra1' => 'El Hefe',
            'guitarra2' => ' Eric Melvin',
            'bateria' => 'Erik Sandin',
            'bajo' => 'Fat Mike',
            'descripcion' => 'NOFX es una banda californiana de punk rock formada en 1983 por Fat Mike como bajo, voz y compositor, y el guitarrista Eric Melvin. El bateria Erik Sandin se les unió poco después, y junto con El Hefe conforman la banda en la actualidad.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('artistas')->insert([
            'nombre' => 'Midnight Riders',
            'voz' => 'Smitty',
            'guitarra1' => 'Smitty',
            'guitarra2' => ' Dusty',
            'bateria' => 'Ox',
            'bajo' => 'Jake',
            'descripcion' => 'Los "Midnight Riders" (Traducidos como los jinetes de medianoche) son una misteriosa banda de Hard Rock. Son famosos por sus espectáculos de luz pirotécnica realizados durante sus actuaciones en vivo y su rudeza contra todo aquel que quiera ser politicamnete correcto. Los Midnight Riders están actualmente en camino para su gira de ferias No Salvation, como parte de la promoción del recién estrenado álbum Greatest Hits, High Heels y Brushed Steel. En Waynesboro, Oklahoma, Dusty apuñaló a un periodista entre las costillas, cuando se le preguntó por qué ama el cáncer, pero el periodista pudo recuperarse, debido a que el ganador del concurso de Midnight Riders, Dwayne Thompson, le donó su pulmón a cambio de una discográfica autografiada completa de Midnight Riders. En Baton Rouge, Luisiana, los Midnight Riders reemplazaron a Jake por el hijo de Riggs Donner, Thad Donner, para conmemorar el 24 aniversario de la muerte de Riggs Donner',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('artistas')->insert([
            'nombre' => 'Transplants',
            'voz' => 'Skinhead Rob / Tim Armstrong',
            'guitarra1' => 'Tim Armstrong',
            'guitarra2' => 'Craig Fairbaugh',
            'bateria' => 'Travis Barker',
            'bajo' => 'Matt Freeman',
            'descripcion' => 'Transplants es un supergrupo creado en 1999 por Tim Armstrong para mezclar la actitud punk rock con las secuencias, sintetizadores y hasta el ambiente de hip hop y la cultura callejera de California',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
  
    }
}
