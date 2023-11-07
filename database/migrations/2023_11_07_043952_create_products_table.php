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
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('category_id')->constrained()->onDelete('restrict');
            $table->foreignId('brand_id')->constrained()->onDelete('restrict');
            $table->longText('description')->nullable();
            $table->string('image');
            $table->bigInteger('qty');
            $table->tinyInteger('discount_type')->nullable()->comment('1 = percentage, 0 = fixed amount');
            $table->double('price');
            $table->double('discount_amount')->nullable();
            $table->tinyInteger('trending')->default('0');
            $table->tinyInteger('status')->default('0')->comment('1 = Active, 0 = Deactive');
            $table->mediumText('meta_title')->nullable();
            $table->mediumText('meta_description')->nullable();
            $table->mediumText('meta_keyword')->nullable();
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
