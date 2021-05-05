<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrinciplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('principles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fr_par_ar');
            $table->string('fr_par_en');
            $table->string('se_par_ar');
            $table->string('se_par_en');
            $table->text('body_ar');
            $table->text('body_en');
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
        Schema::dropIfExists('principles');
    }
}
