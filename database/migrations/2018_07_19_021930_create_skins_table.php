<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkinsTable extends Migration
{
    public $set_table = 'skins';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_table, function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('img');
            $table->integer('price');
            $table->integer('hero_id')
                ->unsigned()
                ->index()
                ->nullable();
            $table->timestamps();
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
