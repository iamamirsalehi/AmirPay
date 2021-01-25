<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id('withdrawal_id');
            $table->unsignedInteger('withdrawal_gateway_id');
            $table->unsignedInteger('withdrawal_user_account_id');
            $table->unsignedInteger('withdrawal_amount');
            $table->float('withdrawal_commission');
            $table->string('withdrawal_ref_number')->nullable();
            $table->unsignedInteger('withdrawal_status')->default(0);
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
        Schema::dropIfExists('withdrawals');
    }
}
