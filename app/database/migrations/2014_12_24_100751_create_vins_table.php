<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVinsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('vins', function($table)
        {
            $table->engine = 'InnoDB';

            // auto increment id (primary key)
            $table->increments('id');

            $table->string('libelle');
            $table->text('description');
            $table->string('specificite');
            $table->double('tav');
            $table->string('im');
            $table->string('etiquette');
            $table->double('prix');

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
        Schema::drop('vins');
	}

}
