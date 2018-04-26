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
            $table->integer('id', true);
            $table->string('username', 31)->unique();
            $table->string('password', 191);
            $table->string('fullname', 191)->nullable();
            $table->string('email', 191);
            $table->tinyInteger('role')->comment('1: admin; 2: author; 3: subscribe');
            $table->string('birthday', 15)->nullable();
            $table->string('remember_token', 127)->nullable();
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
