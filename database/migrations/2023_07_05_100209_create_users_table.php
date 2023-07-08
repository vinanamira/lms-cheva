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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->foreignId("role_id");
            $table->foreignId("divisi_id");
            $table->foreignId("user_mentor_id")->nullable();
            $table->string('photo_profile')->nullable();
            $table->string('fullname');
            $table->string('username')->unique();
            $table->string('email')->index();
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
        Schema::dropIfExists('user');
    }
};
