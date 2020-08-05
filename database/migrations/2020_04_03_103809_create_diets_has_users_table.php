<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDietsHasUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diets_has_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('diets_id');
            $table->unsignedBigInteger('users_id');
            $table->timestamps();
        });
        Schema::table('diets_has_users', function (Blueprint $table) {
            $table->foreign('users_id')
                ->references('id')
                ->on('users');
        });

        Schema::table('diets_has_users', function (Blueprint $table) {
            $table->foreign('diets_id')
                ->references('id')
                ->on('diets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diets_has_users');
    }
}
