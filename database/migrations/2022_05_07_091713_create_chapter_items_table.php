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
        Schema::create('chapter_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('chapter_id')->unsigned()->nullable();
            $table->string('name');
            $table->smallInteger('score');
            $table->tinyInteger('status');
            $table->timestamps();

            $table->foreign('chapter_id')
                ->references('id')
                ->on('chapters')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapter_items');
    }
};
