<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAnswerQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_answer_faq_question', function (Blueprint $table) {
            $table->bigInteger('faq_answer_id')->unsigned()->index();
            $table->foreign('faq_answer_id')
                ->references('id')
                ->on('faq_answers')
                ->onDelete('cascade');

            $table->bigInteger('faq_question_id')->unsigned()->index();
            $table->foreign('faq_question_id')
                ->references('id')
                ->on('faq_questions')
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
        Schema::dropIfExists('table_answer_question');
    }
}
