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
        Schema::create('ifthens', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("then1",100);
            $table->string("then2",100);
            $table->string("then3",100);
            
            $table->unsignedBigInteger("goal_id");
            $table->foreign("goal_id")->references("id")->on("goals")->onDelete("cascade");
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
        Schema::dropIfExists('ifthens');
    }
};
