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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('calories')->nullable();
            $table->float('protein')->nullable();
            $table->float('fat')->nullable();
            $table->float('carbs')->nullable();
            $table->float('fiber')->nullable();
            $table->string('dosha')->nullable();   // Vata, Pitta, Kapha
            $table->string('rasa')->nullable();    // Sweet, Sour, Bitter
            $table->string('virya')->nullable();   // Hot, Cold
            $table->string('vipaka')->nullable();  // Post-digestive effect
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
        Schema::dropIfExists('foods'); // ✅ must match plural table name
    }
};
