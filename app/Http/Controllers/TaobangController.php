<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class TaobangController extends Controller
{
    public function getTaoBang()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); 
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->string('image')->nullable(); 
            $table->timestamps();
        });

        return "Table 'products' created successfully!";
    }

    
}
