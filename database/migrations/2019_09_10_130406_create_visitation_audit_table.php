<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitationAuditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitation_audit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('page_type');
            $table->string('page_id');
            $table->string('link_page');
            $table->integer('count');
            $table->string('user_email');
            $table->string('ip_address');
            $table->softDeletes();
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
        Schema::dropIfExists('visitation_audit');
    }
}
