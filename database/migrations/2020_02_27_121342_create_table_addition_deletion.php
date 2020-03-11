<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdditionDeletion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payroll_addition_deduction', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('main_cat_name')->nullable();
            $table->integer('cat_id')->nullable();
            $table->string('assigned_to')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('payroll_addition_deduction');
    }
}
