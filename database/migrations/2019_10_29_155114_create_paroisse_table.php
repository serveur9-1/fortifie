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
            $table->bigInteger('id_diocese')->unsigned()->index();
            $table->foreign('id_diocese')
                ->references('id')
                ->on('dioceses')
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
        Schema::table('paroisses', function (Blueprint $table) {
            //
        });
    }
}
