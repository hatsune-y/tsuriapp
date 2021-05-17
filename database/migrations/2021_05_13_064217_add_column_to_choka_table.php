<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToChokaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('choka', function (Blueprint $table) {
            $table->date('date');
            $table->string('spot');
            $table->string('fish');
            $table->text('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('choka', function (Blueprint $table) {
            $table->dropColumn('date');
            $table->dropColumn('spot');
            $table->dropColumn('fish');
            $table->dropColumn('comment');
        });
    }
}
