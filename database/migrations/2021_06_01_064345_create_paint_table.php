<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaintTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paint', function (Blueprint $table) {
            $table->id();
    		    $table->string('plate_no', 10);
    		    $table->unsignedBigInteger('current_color');
    		    $table->unsignedBigInteger('target_color');
      			$table->boolean('status')->default('1');
      			$table->unsignedBigInteger('created_by');
      			$table->unsignedBigInteger('updated_by')->nullable(true);
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
        Schema::dropIfExists('paint');
    }
}
