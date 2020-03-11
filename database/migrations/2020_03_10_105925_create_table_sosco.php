<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSosco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sosco', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wage_limit')->nullable();
            $table->integer('status')->default(1);
            $table->float('from_amount', 8, 2)->default(0);
            $table->float('to_amount', 8, 2)->default(0);
            $table->float('employee_contribution', 8, 2)->default(0);
            $table->float('employer_contribution', 8, 2)->default(0);
            $table->float('total_contribution', 8, 2)->default(0);
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
        Schema::dropIfExists('sosco');
    }
}
