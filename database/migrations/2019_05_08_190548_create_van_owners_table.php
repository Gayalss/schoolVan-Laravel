<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVanOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vanOwners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('homeNumber');
            $table->string('mobileNumber');
            $table->string('city');
            $table->string('province');
            $table->string('gender');
            $table->string('photo')->nullable();
            $table->string('password');
            $table->string('confirmPassword');
            $table->rememberToken();
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
        Schema::dropIfExists('vanOwners');
    }
}
