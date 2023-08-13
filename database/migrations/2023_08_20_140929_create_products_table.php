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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('unit_idid')->constrained('units');
            $table->foreignId('supplier_id')->constrained('suppliers');
            $table->decimal('unit_price', 10, 2);
            $table->string('sku')->nullable();
            $table->foreignId('tax_id')->nullable()->constrained('taxes');
            $table->integer('quantity_in_stock');
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
        Schema::dropIfExists('products');
    }
};
