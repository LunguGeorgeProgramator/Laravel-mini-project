<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->bigIncrements('cat_id');
            $table->string('name')->unique();
            $table->longText('description');
            $table->longText('image');
            $table->string('update_by');
            $table->softDeletes();
            $table->timestamps();
        });
        // Schema::dropIfExists('categories');
        // Schema::rename('categories', 'category');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('categories', 'category');
        Schema::dropIfExists('category');
    }
}
