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
            $table->bigInteger('diocese_id')->unsigned()->index();
            $table->foreign('diocese_id')
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
