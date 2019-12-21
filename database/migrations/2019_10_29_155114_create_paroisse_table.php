<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParoisseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paroisses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom',100);
            $table->string('telephone',15)->nullable();
            $table->string('fixe',15)->nullable();
            $table->string('email',50)->nullable();
            $table->bigInteger('ville_id')->unsigned()->index();
            $table->foreign('ville_id')
                ->references('id')
                ->on('villes')
                ->onDelete('cascade');
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
            Schema::dropIfExists('paroisses');
            
    }
}
