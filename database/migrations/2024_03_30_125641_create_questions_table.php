<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->string('option_a');
            $table->string('option_b');
            $table->string('option_c');
            $table->string('option_d');
            $table->enum('correct_option', ['option_a', 'option_b', 'option_c', 'option_d']);
            $table->timestamps();
        });

        DB::table('questions')->insert([
            ['question' => 'Question 1', 'option_a'=> 'option_a', 'option_b'=> 'option_b', 'option_c'=> 'option_c', 'option_d'=> 'option_d', 'correct_option'=> 'option_a'],
            ['question' => 'Question 2', 'option_a'=> 'option_a', 'option_b'=> 'option_b', 'option_c'=> 'option_c', 'option_d'=> 'option_d', 'correct_option'=> 'option_b'],
            ['question' => 'Question 3', 'option_a'=> 'option_a', 'option_b'=> 'option_b', 'option_c'=> 'option_c', 'option_d'=> 'option_d', 'correct_option'=> 'option_c'],
            // Add more dummy data as needed
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
