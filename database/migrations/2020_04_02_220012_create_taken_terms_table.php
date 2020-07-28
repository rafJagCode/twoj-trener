<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakenTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taken_terms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('calendars_id');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('dysciplines_id');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->timestamps();
        });

        Schema::table('taken_terms', function (Blueprint $table) {
            $table->foreign('calendars_id')
                ->references('id')
                ->on('calendars');
        });

        Schema::table('taken_terms', function (Blueprint $table) {
            $table->foreign('users_id')
                ->references('id')
                ->on('users');
        });

        Schema::table('taken_terms', function (Blueprint $table) {
            $table->foreign('dysciplines_id')
                ->references('id')
                ->on('dysciplines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taken_terms');
    }
}
