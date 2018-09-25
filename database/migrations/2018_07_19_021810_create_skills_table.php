<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    public $set_table = 'skills';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_table, function (Blueprint $table) {
            $table->increments('id');
/*            Luu tru skill cua game bao gom cac thong tin: ten skill, hieu ung skill cua tuong,*/
            $table->string('name')
                ->nullable(); //Ten cua skill
            $table->longText('detail')
                ->nullable(); // Chi tiet skill
            $table->float('mana')
                ->nullable(); // Mana can dung
            $table->float('coolDown')
                ->nullable(); // Thoi gian hoi chieu
            $table->integer('ranger')
                ->nullable();
            $table->boolean('status')
                ->index()
                ->nullable()
                ->default(null); // Trang thai skill mac dinh la 0
            $table->string('type')
                ->nullable(); // Dang hieu ung cua ky nang

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

