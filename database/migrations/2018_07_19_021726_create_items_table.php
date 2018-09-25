<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    public $set_table = 'items';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_table, function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->longText('detail')->nullable();
            $table->longText('effects')->nullable();
            $table->longText('uniEffects')->nullable();
            $table->integer('price')->nullable();
            $table->integer('type')->nullable();
            $table->string('img')->nullable();
            $table->integer('version')->nullable();

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
