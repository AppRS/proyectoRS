<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearForeignkeyUserCateg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->integer('id_cat')->unsigned()->nullable()->after('password');

            $table->foreign('id_cat')->references('id_categoria')->on('categoria')
            ->onDelete('set null')
            ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropForeign('users_id_cat_foreign');
            $table->dropColumn('id_cat');
        });
    }
}
