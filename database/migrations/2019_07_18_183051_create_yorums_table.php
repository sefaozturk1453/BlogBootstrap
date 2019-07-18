<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYorumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yorums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('yorum',300);
            $table->unsignedBigInteger('yazi_id');
            $table->foreign("yazi_id")->references("id")->on("yazis");
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
        Schema::dropIfExists('yorums');
    }
}
