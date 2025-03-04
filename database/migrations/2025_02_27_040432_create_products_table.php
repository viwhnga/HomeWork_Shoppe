<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Tự động tạo khóa chính ID (big integer, auto-increment)
            $table->string('name'); // Tên sản phẩm (chuỗi)
            $table->decimal('price', 10, 2); // Giá sản phẩm (định dạng số thập phân, tối đa 10 chữ số, 2 số sau dấu thập phân)
            $table->string('image'); // Ảnh sản phẩm (lưu đường dẫn ảnh)
            $table->timestamps(); // Tạo cột created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
