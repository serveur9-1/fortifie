<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('titre',200);
            $table->string('description',1000);
            $table->bigInteger('id_category')->unsigned()->index();
            $table->foreign('id_category')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->string('img',300)->nullable();
            $table->boolean('is_active')->default(true);

            $table->date('debut');
            $table->date('fin');

            $table->bigInteger('id_user')->unsigned()->index();

            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

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
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
}
