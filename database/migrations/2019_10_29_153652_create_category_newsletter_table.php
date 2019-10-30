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
            $table->bigInteger('category_id')->unsigned()->index();
            $table->bigInteger('newsletter_id')->unsigned()->index();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->foreign('newsletter_id')
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
