<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePistolFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pistol_feature', function (Blueprint $table) {
            $table->id();
            $table->text('model_name');
            $table->text('gun_history');
            $table->int('bullet_type');
            $table->string('silcencer');
            $table->text('safety_triger');
            $table->text('sight');
            $table->text('weight');
            $table->text('power');
            $table->text('price_range');
            $table->text('description');
            $table->text('user_rating');
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
        Schema::dropIfExists('pistol_feature');
    }
}

