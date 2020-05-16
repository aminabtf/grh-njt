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
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthday');
            $table->string('gender');
            $table->string('nationality');
            $table->string('family_situation');
            $table->string('cin');
            $table->string('passeport_number');
            $table->date('passeport_end_date');
            $table->text('current_adress');
            $table->text('permanent_adress');
            $table->string('phone_number');
            $table->integer('postal_code');
            $table->string('home_phone');
            $table->string('mobile');
            $table->string('work_phone');
            $table->string('work_email');
            $table->string('city');
            $table->string('region');
            $table->string('country');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_mobile');
            $table->string('emergency_contact_fix');
            $table->text('emergency_contact_adress');
            $table->string('emergency_contact_relationship');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
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
