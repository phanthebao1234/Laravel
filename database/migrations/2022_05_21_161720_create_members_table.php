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
        Schema::create('members', function (Blueprint $table) {
            $table->char('MemberID',10)->primary();
            $table->string('MemberName',100);
            $table->string('Tel',15)->unique();
            $table->string('Email',100)->unique();                               
            $table->string('Address',100)->nullable();
            $table->date('JoinDate');
            $table->integer('Stars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};
