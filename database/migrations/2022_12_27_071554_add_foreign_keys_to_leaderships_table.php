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
        Schema::table('leaderships', function (Blueprint $table) {
            $table->foreign(['id'], 'leaderships_ibfk_1')->references(['leadership_id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leaderships', function (Blueprint $table) {
            $table->dropForeign('leaderships_ibfk_1');
        });
    }
};
