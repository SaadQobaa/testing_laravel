<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->foreign('role_id')
                        ->references('id')
                        ->on('roles')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
        Schema::table('users', function(Blueprint $table) {
            $table->foreign('project_id')
                        ->references('id')
                        ->on('projects')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
        Schema::table('users', function(Blueprint $table) {
            $table->foreign('qtpp_id')
                        ->references('id')
                        ->on('qtpp')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
        Schema::table('users', function(Blueprint $table) {
            $table->foreign('cqa_id')
                        ->references('id')
                        ->on('cqa')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
        Schema::table('users', function(Blueprint $table) {
            $table->foreign('risk_factors_id')
                        ->references('id')
                        ->on('risk_factors')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign('users_role_id_foreign');
        });
        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign('users_project_id_foreign');
        });
        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign('users_qtpp_id_foreign');
        });
        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign('users_cqa_id_foreign');
        });
        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign('users_risk_factors_id_foreign');
        });
    }
}
