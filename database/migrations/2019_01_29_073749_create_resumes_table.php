<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('description');
            $table->string('phone');
            $table->string('fax');
            $table->string('education_year');
            $table->string('education_level');
            $table->string('programming_skill');
            $table->string('other_skill');
            $table->string('achievement_year');
            $table->string('achievement');
            $table->string('reference_name');
            $table->string('reference_email');
            $table->string('reference_phone');
            $table->string('image');
            $table->string('mime');
            $table->string('ori_image');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumes');
    }
}
