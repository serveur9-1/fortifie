<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFaqQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('libelle',100);
            $table->bigInteger('faq_section_id')->unsigned()->index();
            $table->foreign('faq_section_id')
                ->references('id')
                ->on('faq_sections')
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
        Schema::dropIfExists('faq_questions');
    }
}
