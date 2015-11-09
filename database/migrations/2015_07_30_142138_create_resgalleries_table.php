<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResgalleriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resgalleries', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('resume_id');
            $table->boolean('active');
            $table->integer('weight');
            $table->string('image');
            $table->string('alt');
            $table->string('title');
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
		Schema::drop('resgalleries');
	}

}
