<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('diet_plan_items', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('diet_plan_id');
        $table->unsignedBigInteger('food_id');
        $table->integer('quantity')->default(1);
        $table->string('meal_time')->nullable();
        $table->timestamps();

        $table->foreign('diet_plan_id')->references('id')->on('dietplans')->onDelete('cascade');
        $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dietplan_items');
    }
};
