<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('mail', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('subject');
            $table->longText('message');
            $table->text('mail_from');
            $table->text('mail_to');
            $table->integer('thread');
            $table->integer('new');
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mail');
	}

}
