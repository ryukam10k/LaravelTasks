<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Todo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // テーブル作成
        Schema::create('tasks', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('is_fiished')->default(false);
            $table->timestamps();
                       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // テーブル削除
        Schema::dropIfExists('tasks');
    }
}
