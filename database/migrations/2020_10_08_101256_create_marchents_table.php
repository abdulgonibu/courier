<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarchentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marchents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cname')->nullable();
            $table->string('name')->nullable();
            $table->string('nearest_zone')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('password_confirmation')->nullable();
            $table->tinyInteger('status')->default('0')->comment('0=Pending,1=Approve');
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
        Schema::dropIfExists('marchents');
    }
}
