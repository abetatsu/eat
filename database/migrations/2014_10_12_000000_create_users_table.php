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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('gender');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->integer('totalPrice')->default(0);
            $table->integer('totalCalories')->default(0);
            $table->decimal('totalProtein')->default(0);
            $table->decimal('totalFat')->default(0);
            $table->decimal('totalCarb')->default(0);
            $table->decimal('totalSodium')->default(0);
            $table->integer('totalWeekCalories')->default(0);
            $table->decimal('totalWeekProtein')->default(0);
            $table->decimal('totalWeekFat')->default(0);
            $table->decimal('totalWeekCarb')->default(0);
            $table->decimal('totalWeekSodium')->default(0);
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
