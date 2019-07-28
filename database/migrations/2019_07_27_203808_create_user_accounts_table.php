<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('laravel')->create('account_user', function (Blueprint $table) {
            $table->integer('user_id')->references('id')->on('users');
            $table->string('login');
            $table->timestamps();
        });

        Schema::connection('laravel')->table('account_user', function (Blueprint $table) {
            $table->unique(['user_id', 'login']);
            $table->unique('login');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('laravel')->dropIfExists('account_user');
    }
}
