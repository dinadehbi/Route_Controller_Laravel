<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
        public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable(); // Add the category_id column
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null'); // Define the foreign key relationship
        });
    }

    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign(['category_id']); // Drop the foreign key constraint
            $table->dropColumn('category_id'); // Drop the column
        });
    }

};
