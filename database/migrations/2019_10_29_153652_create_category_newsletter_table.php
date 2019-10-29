<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryNewsletterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_newsletter', function (Blueprint $table) {
            $table->bigInteger('id_category')->unsigned()->index();
            $table->bigInteger('id_newsletter')->unsigned()->index();
            $table->foreign('id_category')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->foreign('id_newsletter')
                ->references('id')
                ->on('newsletters')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categorie_newsletter', function (Blueprint $table) {
            //
        });
    }
}
