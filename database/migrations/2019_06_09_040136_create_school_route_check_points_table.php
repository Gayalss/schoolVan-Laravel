<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolRouteCheckPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_route_check_points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vanowneremail');
            $table->foreign('vanowneremail')->references('email')->on('van_owners')->onDelete('restrict')->onUpdate('restrict');
            $table->String('checkPoint');
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
        Schema::dropIfExists('school_route_check_points');
    }
}
