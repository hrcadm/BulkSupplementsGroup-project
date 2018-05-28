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
            $table->string('username');
            $table->string('first_name',100)->nullable()->default(NULL);
            $table->string('last_name',100)->nullable()->default(NULL);
            $table->string('suffix',100)->nullable()->default(NULL);
            $table->string('phone',50)->nullable()->default(NULL);
            $table->string('mobile',50)->nullable()->default(NULL);
            $table->string('fax',50)->nullable()->default(NULL);
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedInteger('membership_id')->nullable()->default(NULL);
            $table->foreign('membership_id')->references('id')->on('memberships');
            $table->unsignedInteger('company_id')->nullable()->default(NULL);
            $table->foreign('company_id')->references('id')->on('companies');
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
