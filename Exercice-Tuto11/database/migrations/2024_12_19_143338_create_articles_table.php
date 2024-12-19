<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');  // Titre de l'article
            $table->text('content');  // Contenu de l'article
            $table->timestamps();     // Dates de création et de mise à jour
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
