<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Nom du tag
            $table->timestamps();    // Dates de création et de mise à jour
        });
    }

    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
