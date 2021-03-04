<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('author');// Création d'un champ texte 'author'
            $table->longText('description'); // Création d'un champ texte long 'contenu'
            $table->string('publication_year');
            $table->string('genre');
            $table->string('title',255); // Création d'un champ texte 'titre' de 255 caractères
            $table->string('pages_nb');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
