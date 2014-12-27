<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterRecompensesAnneeMillesimeTypeString extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::table('recompenses', function($table)
        {
            $table->string('annee');
            $table->string('millesime')->nullable();
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
            $table->dropColumn('annee');
            $table->dropColumn('millesime');
        });
    }

}
