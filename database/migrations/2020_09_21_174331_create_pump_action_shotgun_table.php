<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePumpActionShotgunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pump_action_shotgun', function (Blueprint $table) {
            $table->id();
            $table->text('model_name');
            $table->text('gun_history');
            $table->text('barrel_type');
            $table->text('fore_end');
            $table->text('bullet');
            $table->text('weight');
            $table->text('power');
            $table->text('description');
            $table->text('price');
            $table->text('users_rating');
            $table->text('user_comment');
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
        Schema::dropIfExists('pump_action_shotgun');
    }
}
