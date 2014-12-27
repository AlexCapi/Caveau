<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecompensesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('recompenses', function($table)
        {
            $table->engine = 'InnoDB';

            // auto increment id (primary key)
            $table->increments('id');

            $table->time('annee');
            $table->string('selection');
            $table->time('millesime')->nullable();

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
        Schema::drop('recompenses');
    }

}
