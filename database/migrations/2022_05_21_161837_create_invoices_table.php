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
        Schema::create('invoices', function (Blueprint $table) {
            $table->char('InvoiceNo',10)->primary();
            $table->dateTime('InvoiceDate',$precision=0);
            $table->char('MemberId',10);
            $table->char('ProductId',10);
            $table->integer('Quantity');
            $table->integer('Price');
            $table->unique(['MemberId','ProductId'],'InvoiceDate');
            $table->foreign('MemberId')->references('MemberId')->on('members');
            $table->foreign('ProductId')->references('ProductId')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
