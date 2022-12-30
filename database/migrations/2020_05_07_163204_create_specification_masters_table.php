<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecificationMastersTable extends Migration
{
    public function up()
    {
        Schema::create('specification_masters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('commodity_id');
            $table->unsignedBigInteger('country_id');

            $table->boolean('status')
                ->default(1)
                ->comment("0 - Inactive / 1 - Active");

            $table->foreign('commodity_id')
                ->references('id')
                ->on('commodity_masters');
            $table->foreign('country_id')
                ->references('id')
                ->on('country_masters');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('specification_masters');
    }
}
