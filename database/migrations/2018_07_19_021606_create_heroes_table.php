<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroesTable extends Migration
{
    public $set_table = 'heroes';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_table, function (Blueprint $table) {
            $table->increments('id');
            $table->longText('history')->nullable();
            $table->string('name');

            /* Heroes info ability*/
            $table->integer('ability_effect')->nullable();
            $table->integer('offense')->nullable();
            $table->integer('durability')->nullable();
            $table->integer('jungle')->nullable();
            $table->integer('poke')->nullable();
            $table->integer('difficulty')->nullable();

            /* Price Heroes in game*/
            $table->integer('bp_prices')->nullable();
            $table->integer('m_prices')->nullable();

            /* Info hero in game*/
            $table->integer('move_sp')->nullable();
            $table->float('attack_sp')->nullable();
            $table->integer('phys_attack')->nullable();
            $table->integer('magic_pow')->nullable();
            $table->integer('armor')->nullable();
            $table->integer('magic_res')->nullable();
            $table->integer('hp')->nullable();
            $table->integer('mana')->nullable();
            $table->integer('hp_regen')->nullable();
            $table->integer('mana_regen')->nullable();

            $table->integer('version')->nullable()->default(null);

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