<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolVanRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_van_routes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vanOwnerEmail');
            $table->foreign('vanOwnerEmail')->references('email')->on('van_owners')->onDelete('restrict')->onUpdate('restrict');
            $table->String('selectVehicle');
            $table->String('selectDriver');
            // $table->String('schools');
            // $table->String('checkPoints');
            $table->String('tripType');
            $table->String('schoolTime');
            
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
        Schema::dropIfExists('school_van_routes');
    }
}
