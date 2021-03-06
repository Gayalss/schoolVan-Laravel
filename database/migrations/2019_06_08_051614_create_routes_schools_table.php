<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes_schools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vanowneremail');
            $table->foreign('vanowneremail')->references('email')->on('van_owners')->onDelete('restrict')->onUpdate('restrict');
            $table->String('schoolName');
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
        Schema::dropIfExists('routes_schools');
    }
}
