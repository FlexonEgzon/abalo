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
        Schema::create('ab_article', function (Blueprint $table) {
            $table->id();
            $table->string('ab_name',80);
            $table->unsignedInteger('ab_price');
            $table->string('ab_description',1000);
            $table->unsignedBigInteger('ab_creator_id');
            $table->timestamp('ab_createdate');
            $table->foreign('ab_creator_id')->references('id')->on('ab_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ab_article');
    }
};
