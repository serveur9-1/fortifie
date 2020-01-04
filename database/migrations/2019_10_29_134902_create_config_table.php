<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('telephone')->default("84615009");
            $table->string('email')->default('contact@fortifietoi.ci');
            $table->string('localite')->default("Côte d'Ivoire, Grand Bassam")->nullable();
            $table->longText('description')->default('Pour un quelconque besoin, laissez-nous un message. Votre préoccupation sera résolue dans les plus brefs délais. <br>
            Nous sommes disponibles du lundi au vendredi entre 7h et 17h. Merci de bien vouloir renseigner ce formulaire.');
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
            Schema::dropIfExists('configs');
            
    }
}
