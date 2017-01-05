<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
                 $table->increments('id');
                 $table->string('name');
                 $table->string('email')->unique();
                 $table->string('password');
                 $table->string('usuDireccion');
                 $table->string('usuTelefono');
                 $table->string('usuRut')->unique();
                 $table->string('usuImg');
                 $table->boolean('verified')->default(false);
                 $table->string('token', 40)->nullable();
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
        Schema::dropIfExists('users');
    }
}
