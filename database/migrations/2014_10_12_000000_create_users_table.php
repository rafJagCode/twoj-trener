<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('firstName',55);
            $table->string('secondName',55);
            $table->string('email',55)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('city',55);
            $table->text('description');
            $table->string('phoneNumber',11);
            $table->string('profilePicture',255)->default('profile.jpg');
            $table->string('password');
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
