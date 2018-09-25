<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroBuildsTable extends Migration
{
    public $set_table = 'hero_builds';
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
                ->index();
            $table->integer('slot1')
                ->unsigned()
                ->index()
                ->nullable();
            $table->integer('slot2')
                ->unsigned()
                ->index()
                ->nullable();
            $table->integer('slot3')
                ->unsigned()
                ->index()
                ->nullable();
            $table->integer('slot4')
                ->unsigned()
                ->index()
                ->nullable();
            $table->integer('slot5')
                ->unsigned()
                ->index()
                ->nullable();
            $table->integer('slot6')
                ->unsigned()
                ->index()
                ->nullable();

            $table->integer('type_id')
                ->unsigned()
                ->index()
                ->nullable();
            $table->integer('version')->nullable();

            $table->timestamps();
        });

        Schema::table($this->set_table,function (Blueprint $table){
            $table->foreign('type_id')->references('id')->on('type')->onDelete('cascade');
            $table->foreign('hero_id')->references('id')->on('heroes')->onDelete('cascade');
            $table->foreign('slot1')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('slot2')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('slot3')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('slot4')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('slot5')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('slot6')->references('id')->on('items')->onDelete('cascade');
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
