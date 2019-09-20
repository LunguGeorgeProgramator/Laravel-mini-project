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
            $table->bigIncrements('prod_id');
            $table->unsignedBigInteger('category_id'); // create cheia straina
            $table->foreign('category_id')->references('cat_id')->on('category')->onDelete('cascade'); // creare relatia intre tabele, tine minde casde on delete, sa merga stergerea
            $table->string('name')->unique();
            $table->string('description');
            $table->longText('image');
            $table->string('update_by');
            $table->softDeletes();
            $table->timestamps();
            
            $table->index('category_id'); // index id din tabela categori
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
