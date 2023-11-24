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
        Schema::create('cartoons', function (Blueprint $table) {
            $table->id();
            $table->string("title", 50);
            $table->string("slug", 50)->unique();
            $table->year("year");
            $table->string("creator");
            $table->string("rating", 10);
            $table->string("genre");
            $table->tinyInteger("runtime_in_minutes")->unsigned();
            $table->smallInteger("episodes")->unsigned();
            $table->string("image");
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
        Schema::dropIfExists('cartoons');
    }
};
