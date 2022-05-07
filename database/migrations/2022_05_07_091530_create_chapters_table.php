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
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('field_id')->unsigned()->nullable();
            $table->string('name');
            $table->smallInteger('max_score');
            $table->smallInteger('min_score');
            $table->text('information');
            $table->tinyInteger('status');
            $table->timestamps();

            $table->foreign('field_id')
                ->references('id')
                ->on('fields')
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
        Schema::dropIfExists('chapters');
    }
};
