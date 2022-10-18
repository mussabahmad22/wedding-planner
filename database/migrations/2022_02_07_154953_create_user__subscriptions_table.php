<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__subscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->enum('payment_method', ['Paypal', 'Stripe', 'Amazon Pay'])->default('Stripe');
            $table->string('stripe_subscription_id');
            $table->string('stripe_customer_id');
            $table->string('stripe_plan_id');
            $table->FLOAT('plan_amount', 10,2);
            $table->string('plan_amount_currency');
            $table->string('plan_interval');
            $table->integer('plan_interval_count');
            $table->string('payer_email');
            $table->datetime('created');
            $table->datetime('plan_period_start');
            $table->datetime('plan_period_end');
            $table->string('status');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user__subscriptions');
    }
}
