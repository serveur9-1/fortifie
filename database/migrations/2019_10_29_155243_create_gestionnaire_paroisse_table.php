<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionnaireParoisseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestionnaire_paroisse', function (Blueprint $table) {
            $table->bigInteger('id_gestionnaire')->unsigned()->index();
            $table->bigInteger('id_paroisse')->unsigned()->index();
            $table->foreign('id_gestionnaire')->references('id')->on('gestionnaires')->onDelete('cascade');
            $table->foreign('id_paroisse')->references('id')->on('paroisses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gestionnaire_paroisse', function (Blueprint $table) {
            //
        });
    }
}
