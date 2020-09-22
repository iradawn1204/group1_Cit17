<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevolverFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revolver_feature', function (Blueprint $table) {
            $table->id();
            $table->id('model_name');
            $table->id('gun_history');
            $table->id('loading_type');
            $table->id('action');
            $table->id('bullet_type');
            $table->id('bullet_fit_in_revolver');
            $table->id('weight');
            $table->id('power');
            $table->id('price_range');
            $table->id('description');
            $table->id('user_rating');
            $table->id('user_comment');
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
        Schema::dropIfExists('revolver_feature');
    }
}
