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
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('order')->nullable();
            $table->Integer('user_id')->unsigned()->constrained('category');
            // $table->foreignId('user_id')->constrained('category')->nullable()->onDelete('cascade');
            // $table->foreignId('user_id')->references('id')->on('category')->nullable()->onDelete('cascade');
            $table->timestamps();
            // $table->integer('category_id')->nullable();
            // $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
};
