<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('uni_name');
            $table->string('dept_name');
            $table->string('start_year');
            $table->string('pass_year');
            $table->string('org_name');
            $table->string('designation');
            $table->String('contact_number');
            $table->String('address');
            $table->String('duration');
            $table->String('responsibilities');
            $table->String('exam_title');
            $table->String('major');
            $table->String('result');
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
        Schema::dropIfExists('profile');
    }
}
