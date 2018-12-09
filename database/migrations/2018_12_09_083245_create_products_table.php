<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('name')->comment('产品名称');
            $table->string('image')->comment('产品图片');
            $table->decimal('price')->commnet('产品价格');
            $table->string('describe')->comment('产品描述');
            $table->boolean('hot')->comment('热门产品');
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
}
