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
            $table->bigInteger('gestionnaire_id')->unsigned()->index();
            $table->bigInteger('paroisse_id')->unsigned()->index();
            $table->foreign('gestionnaire_id')->references('id')->on('gestionnaires')->onDelete('cascade');
            $table->foreign('paroisse_id')->references('id')->on('paroisses')->onDelete('cascade');
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
