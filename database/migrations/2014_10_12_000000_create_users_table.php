<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
           $table->string('LastName')->nullable();
            $table->string('email')->nullable()->default('facebook');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password'); // Use a string data type for passwords
            $table->bigInteger('phone')->nullable(); // Phone can be nullable
            $table->mediumText('image')->nullable()->default(); // Image can be nullable
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
};