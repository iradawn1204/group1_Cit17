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
            $table->text('model_name');
            $table->text('gun_history');
            $table->text('loading_type');
            $table->text('action');
            $table->text('bullet_type');
            $table->int('bullet_fit_in_revolver');
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
        Schema::dropIfExists('revolver_feature');
    }
}
 
