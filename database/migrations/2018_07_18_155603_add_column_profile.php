<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('categories')->nullable();       
            $table->string('sample1')->nullable(); 
            $table->string('sample2')->nullable(); 
            $table->string('sample3')->nullable(); 
            $table->integer('test_id')->nullable(); 
            $table->float('test_result')->nullable(); 
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
