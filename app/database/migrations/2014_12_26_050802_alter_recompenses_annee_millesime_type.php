<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterRecompensesAnneeMillesimeType extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('recompenses', function($table)
        {
            $table->dropColumn('annee');
            $table->dropColumn('millesime');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('recompenses', function($table)
        {
            $table->time('annee');
            $table->time('millesime')->nullable();
        });
	}

}
