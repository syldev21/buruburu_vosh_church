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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('gender', 1)->nullable();
            $table->string('phone_no')->nullable();
            $table->integer('dob')->nullable();
            $table->string('marital_status')->nullable();
            $table->integer('age_cluster')->nullable();
            $table->integer('cell_group_id')->nullable()->unique('cell_group_id');
            $table->integer('estate_id')->nullable();
            $table->integer('employment_status')->nullable();
            $table->integer('born_again')->nullable();
            $table->integer('leadership_id')->nullable()->unique('leadership_id');
            $table->integer('ministry_id')->nullable()->unique('ministry_id');
            $table->integer('profession_id')->nullable()->unique('profession_id');
            $table->integer('education_level_id')->nullable()->unique('education_level_id');
            $table->dateTime('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('remember_token')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
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
