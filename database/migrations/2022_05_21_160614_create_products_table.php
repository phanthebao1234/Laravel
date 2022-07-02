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
    public function up() // dùng để thêm, bớt, thay đổi dữ liệu,... nội dung bảng cơ sở dữ liệu - để thực thi ta dùng lệnh php artisan migrate
    {
        Schema::create('products', function (Blueprint $table) {
            $table->char('ProductID',10)->primary();
            $table->string('ProductName',100)->unique();
            $table->string('Unit',20);
            $table->integer('Cost');
            $table->string('Image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()  //dùng để phục hồi, xóa bảng ,.. để thực thi ta dùng lệnh php artisan migrate:rollback
    {
        Schema::dropIfExists('products');
    }
};
