<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandesVinsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('commandes_vins', function($table) {

            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('commandes_vins');
    }

}
