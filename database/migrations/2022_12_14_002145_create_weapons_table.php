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
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('名前');
            $table->unsignedDecimal('rifle_range', 2, 1)->comment('射程');
            $table->unsignedDecimal('maximum_range', 2, 1)->unsigned()->comment('最大射程');
            $table->string('path')->nullable()->comment('画像パス');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weapons');
    }
};
