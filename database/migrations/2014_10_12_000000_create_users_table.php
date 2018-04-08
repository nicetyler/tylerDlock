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
            $table->increments('id')->unsigned();
            $table->string('name',100)->default("");
            $table->string('login_name',100)->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->integer('company_id')->unsigned()->nullable();
            $table->tinyInteger('gender_type_id')->unsigned()->default(1);
            $table->string('phone', 20)->default("");
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
