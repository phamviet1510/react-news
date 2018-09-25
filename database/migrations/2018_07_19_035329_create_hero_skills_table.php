<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroSkillsTable extends Migration
{
    public $set_table = 'hero_skills';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_table, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hero_id')
                ->unsigned()
                ->index()
                ->nullable();
            $table->integer('skill_id')
                ->unsigned()
                ->index()
                ->nullable();
            $table->integer('position')->nullable();

        });

        Schema::table($this->set_table,function (Blueprint $table){
            $table->foreign('hero_id')
                ->references('id')
                ->on('heroes')
                ->onDelete('cascade');

            $table->foreign('skill_id')
                ->references('id')
                ->on('skills')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->set_table);
    }
}
