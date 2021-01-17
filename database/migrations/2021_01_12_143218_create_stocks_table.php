<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable(false);
            $table->integer('type_id')->nullable(false);
            $table->integer('amount')->nullable(false);
            $table->string('note')->nullable(true);
            $table->timestamps();

            // 論理削除
            $table->softDeletes();

            // 複数カラムのunique設定
            $table->unique(['user_id','type_id']);   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
