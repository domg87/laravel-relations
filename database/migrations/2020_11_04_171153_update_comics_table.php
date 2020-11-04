<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comics', function (Blueprint $table) {
            
            $table->dropColumn('author');
            
            $table->unsignedBigInteger('author_id')->nullable();
            //relazione
            $table->foreign('author_id')->references('id')->on('authors');
        
        
        
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comics', function (Blueprint $table) {
            
            $table->string("author", 50)->nullable();

            $table->dropForeign(['author_id']); //relazione
            $table->dropColumn('author_id');
        
        });
    }
}
