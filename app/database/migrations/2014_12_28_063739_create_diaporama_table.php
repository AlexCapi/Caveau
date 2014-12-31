<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaporamaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::create('diaporama', function($table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->text('image');
            $table->boolean('selected');
            $table->text('description');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('diaporama');
    }

}
