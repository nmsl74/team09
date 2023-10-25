<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id()->comment('編號(主鍵)');
            $table->string('player')->comment('玩家');
            $table->string('character_position')->comment('角色位置');
            $table->string('mouse')->comment('滑鼠');
            $table->string('dpi')->comment('dpi');
            $table->string('sens')->comment('sens');
            $table->string('scope_sens')->comment('開鏡靈敏度');
            $table->string('monitor')->comment('螢幕');
            $table->string('graphics_card')->comment('顯示卡');
            $table->string('resolution')->comment('解析度');
            $table->string('scaling_ratio')->comment('縮放比例');
            $table->string('display_mode')->comment('顯示模式');
            $table->string('mouse_pad')->comment('滑鼠墊');
            $table->string('keyboard')->comment('鍵盤');
            $table->string('earphone')->comment('耳機');
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
        Schema::dropIfExists('players');
    }
}
