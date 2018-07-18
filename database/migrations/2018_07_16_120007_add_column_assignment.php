<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnAssignment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assignments', function (Blueprint $table) {
            $table->integer('urgency')->nullable();
            $table->integer('level')->nullable();
            $table->integer('pages')->nullable();
            $table->integer('spacing')->nullable();
            $table->integer('top_ten')->nullable();
            $table->integer('vip_support')->nullable();
            $table->integer('proofread')->nullable();
            $table->integer('summary')->nullable();
            $table->integer('academic_level')->nullable();
            $table->integer('style')->nullable();
            $table->integer('sources')->nullable();
            $table->integer('language_style')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
