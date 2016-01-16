<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQtppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qtpp', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();                    
            $table->boolean('seen')->default(false);
            $table->string('name');
            $table->string('dosage_form');
            $table->string('route_admin');
            $table->string('dosage_strength');
            $table->text('pharmacokinetics');
            $table->string('stability');
            $table->string('assay');
            $table->string('water_content');
            $table->string('content_uniformity');
            $table->string('dissolution');
            $table->string('degradation');
            $table->string('purity');
            $table->string('container_closure_system');
            $table->string('friability');
            $table->engine = 'InnoDB';
        });

        Schema::table('qtpp', function(Blueprint $table) {
            $table->foreign('project_id')->references('id')->on('projects')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });

        Schema::table('qtpp', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::table('qtpp', function(Blueprint $table) {
            $table->dropForeign('qtpp_project_id_foreign');
        });
        
        Schema::table('qtpp', function(Blueprint $table) {
            $table->dropForeign('qtpp_user_id_foreign');
        });

        Schema::drop('qtpp');
    }
}
