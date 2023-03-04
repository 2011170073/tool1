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
        Schema::table('ifthens', function (Blueprint $table) {
            $table->string("then2")->nullable()->change();
            $table->string("then3")->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ifthens', function (Blueprint $table) {
            //
        });
    }
};
