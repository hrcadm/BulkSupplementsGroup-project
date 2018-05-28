<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->nullable()->default(NULL);
            $table->string('address_one',255)->nullable()->default(NULL);
            $table->string('address_two',255)->nullable()->default(NULL);
            $table->string('city',50)->nullable()->default(NULL);
            $table->string('state',100)->nullable()->default(NULL);
            $table->string('post_code',25)->nullable()->default(NULL);
            $table->string('country',50)->nullable()->default(NULL);
            $table->string('phone',50)->nullable()->default(NULL);
            $table->string('fax',50)->nullable()->default(NULL);
            $table->string('website',100)->nullable()->default(NULL);
            $table->string('email',25)->nullable()->default(NULL);
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
        Schema::dropIfExists('companies');
    }
}