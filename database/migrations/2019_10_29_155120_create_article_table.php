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
            $table->string('contact_telephone',15)->nullable();
            $table->string('contact_fixe',15)->nullable();
            $table->string('contact_email',50)->nullable();
            $table->string('description',1000);
            $table->string('slug',100)->nullable();
            $table->bigInteger('category_id')->unsigned()->index();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->string('img',300)->nullable();
            $table->boolean('is_active')->default(false);

            $table->boolean('sans_titre')->nullable()->default(false);

            $table->date('debut');
            $table->date('fin');

            $table->time('heure_debut');
            $table->time('heure_fin');

            $table->bigInteger('user_id')->unsigned()->index();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->bigInteger('paroisse_id')->unsigned()->index();
            $table->foreign('paroisse_id')
                ->references('id')
                ->on('paroisses')
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
