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
        Schema::create('big_goals', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name",100);
            $table->string("condition",100);
            $table->string("start_season",100);
            $table->string("end_season",100);
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
        Schema::dropIfExists('big_goals');
    }
};
