<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banks', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });
        Schema::table('unities', function (Blueprint $table) {
            $table->foreignId('unity_id')->constrained();
        });
        Schema::table('contracts', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });
        Schema::table('children', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('school_certificate_id')->constrained();
        });
        Schema::table('spouses', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });
        Schema::table('hours_offs', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });
        Schema::table('roles_users', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('roles_id')->constrained();
        });
        Schema::table('preferences_users', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('preferences_id')->constrained();
        });
        Schema::table('insurances', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });
        Schema::table('employee_grades', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('grade_id')->constrained();
        });
        Schema::table('employee_jobs', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('job_id')->constrained();
        });

        Schema::table('spendings', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });

        Schema::table('employee_unities', function (Blueprint $table) {
            $table->foreignId('unity_id')->constrained();
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
