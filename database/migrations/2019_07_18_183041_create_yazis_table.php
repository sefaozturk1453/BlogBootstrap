<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYazisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yazis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("baslik");
            $table->text("icerik");
            $table->unsignedBigInteger("kategori_id");
            $table->foreign("kategori_id")->references("id")->on("kategoris");
            $table->string("url");
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
        Schema::dropIfExists('yazis');
    }
}
