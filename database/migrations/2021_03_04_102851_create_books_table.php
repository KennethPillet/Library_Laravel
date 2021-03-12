<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title',255); // Création d'un champ texte 'titre' de 255 caractères
            //$table->string('author');// Création d'un champ texte 'author'
            $table->integer('author_id');//son id
            $table->longText('description'); // Création d'un champ texte long 'contenu'
            $table->string('genre');
            $table->integer('publication_year');
            $table->integer('pages_nb');
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
        Schema::dropIfExists('categories');
    }
}
