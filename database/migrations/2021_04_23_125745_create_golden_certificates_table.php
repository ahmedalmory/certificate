<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoldenCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('golden_certificates', function (Blueprint $table) {
            $table->id();
            $table->string("main_title")->nullable();
            $table->string("epithet")->nullable();
            $table->string("name")->nullable();
            $table->string("message")->nullable();
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
        Schema::dropIfExists('golden_certificates');
    }
}
