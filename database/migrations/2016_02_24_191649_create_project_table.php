<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->string('url');
            $table->string('title');
            $table->text('description');
            $table->string('tags');
            $table->string('img');
            $table->string('files');
            $table->integer('price');
            $table->timestamp('end_project');
            $table->boolean('remote');
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
        Schema::drop('project');
    }
}
