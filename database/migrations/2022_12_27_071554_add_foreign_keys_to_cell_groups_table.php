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
        Schema::table('cell_groups', function (Blueprint $table) {
            $table->foreign(['id'], 'cell_groups_ibfk_1')->references(['cell_group_id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['pastor_id'], 'cell_groups_ibfk_2')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cell_groups', function (Blueprint $table) {
            $table->dropForeign('cell_groups_ibfk_1');
            $table->dropForeign('cell_groups_ibfk_2');
        });
    }
};
