<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPageCountFieldToBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // add field
        Schema::table('books', function (Blueprint $table) {
            $table->integer('page_count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // delete field
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('page_count');
        });
    }
}
