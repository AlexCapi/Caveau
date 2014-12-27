<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignCommandesVins extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commandes_vins', function($table) {
            $table->integer('commande_id')->unsigned();
            $table->integer('vin_id')->unsigned();

            $table->foreign('commande_id')->references('id')->on('commandes');
            $table->foreign('vin_id')->references('id')->on('vins');
        });
    }

    public function down()
    {
        Schema::table('commandes_vins', function($table) {
            $table->dropForeign('commandes_vins_commande_id_foreign');
        });
        Schema::table('commandes_vins', function($table) {
            $table->dropForeign('commandes_vins_vin_id_foreign');
        });
    }

}
