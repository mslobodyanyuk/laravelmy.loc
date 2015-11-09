<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestgalleriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('testgalleries', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('test_id');
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
		Schema::drop('testgalleries');
	}

}
