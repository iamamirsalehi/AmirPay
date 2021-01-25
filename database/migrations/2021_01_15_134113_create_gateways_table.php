<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatewaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gateways', function (Blueprint $table) {
            $table->id('gateway_id');
            $table->tinyIncrements('gateway_plan');
            $table->unsignedInteger('gateway_user_id');
            $table->string('gateway_title', 100);
            $table->string('gateway_website', 50);
            $table->unsignedBigInteger('gateway_balance')->default(0);
            $table->string('gateway_access_token');
            $table->smallInteger('gateway_default_bank')->nullable();
            $table->tinyInteger('gateway_status')->default(0);
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
        Schema::dropIfExists('gateways');
    }
}
