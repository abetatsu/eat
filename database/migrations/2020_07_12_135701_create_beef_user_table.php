<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeefUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beef_user', function (Blueprint $table) {
            $table->unsignedInteger('beef_id');
            $table->unsignedInteger('user_id');
            $table->integer('quantity');
            $table->timestamps();


            $table->foreign('beef_id')
                ->references('id')
                ->on('beefs')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beef_user');
    }
}
