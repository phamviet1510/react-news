<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKDAsTable extends Migration
{
    public $set_table = 'kda';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_table, function (Blueprint $table) {
            $table->increments('id');

            $table->integer('version')->nullable(); // KDA theo version

            $table->float('popularity')->nullable(); // Ty le pho bien su dung
            $table->float('winRate')->nullable();   //Winrate chung cua tuong
            $table->float('kda')->nullable();       // kda chung cua tuong
            $table->float('kill')->nullable();      //so luong kill, death, ho tro cua tuong
            $table->float('death')->nullable();
            $table->float('assist')->nullable();
            $table->integer('hero_id')->unsigned()->index();
        });

        Schema::table($this->set_table,function (Blueprint $table){
            $table->foreign('hero_id')->references('id')->on('heroes')->onDelete('cascade');
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
