<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artistas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique()->nullable(false);
            $table->string('voz')->nullable(false);
            $table->string('guitarra1')->nullable(false);
            $table->string('guitarra2')->nullable();
            $table->string('bateria')->nullable(false);
            $table->string('bajo')->nullable(false);
            $table->string('imagen')->nullable();
            $table->text('descripcion')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artistas');
    }
};
