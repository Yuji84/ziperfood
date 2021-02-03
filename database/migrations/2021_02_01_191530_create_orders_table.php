<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('products')->onDelete('cascade');
            $table->date('accept');
            $table->date('dispatched');
            $table->bigInteger('coupon_id')->unsigned()->nullable();
            $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('set null');
            $table->boolean('delivery');
            $table->double('delivery_tax',6,2);
            $table->bigInteger('deliveryman_id')->unsigned()->nullable();
            $table->foreign('deliveryman_id')->references('id')->on('deliverymen')->onDelete('set null');
            $table->enum('payment_method',['money','pagseguro-credit','pix','debit','credit']);
            $table->bigInteger('customer_id')->unsigned()->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('set null');
            $table->bigInteger('address_id')->unsigned()->nullable();
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('set null');
            $table->boolean('paid');
            $table->text('feedback')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
