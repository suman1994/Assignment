<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndiaPinodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('india_pinode', function (Blueprint $table) {
            $table->id();
            $table->string('officename');
            $table->integer('pincode');
            $table->string('officeType');
            $table->string('deliverystatus');
            $table->string('divisionname');
            $table->string('regionname');
            $table->string('circlename');
            $table->string('taluk');
            $table->string('districtname');
            $table->string('statename');
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
        Schema::dropIfExists('india_pinode');
    }
}
