<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubMachinegunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_machineguns', function (Blueprint $table) {
            $table->id();
            $table->text('model_name');
            $table->text('gun_history');
            $table->string('grip');
            $table->string('magazine_type');
            $table->text('bullet');
            $table->decimal('weight');
            $table->text('power');
            $table->text('description');
            $table->text('price_range');
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
        Schema::dropIfExists('sub_machineguns');
    }
}
