<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pubs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img')->unique();
            $table->string('url',100);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_banner')->default(false);
            $table->date('debut');
            $table->date('fin');
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
            Schema::dropIfExists('pubs');
    }
}
