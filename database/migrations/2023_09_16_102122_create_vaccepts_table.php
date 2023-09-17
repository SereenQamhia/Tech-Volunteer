<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccepts', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('user_id')->unsigned()->default(0);
                $table->string('Address');
                $table->string('Languages');
                $table->string('day');
                $table->string('email');
                $table->string('Experience');
                $table->string('CV');
                $table->timestamps();

                // Define the foreign key constraint
                // $table->foreign('user_id')->references('id')->on('users');
            });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccepts');
    }
};
