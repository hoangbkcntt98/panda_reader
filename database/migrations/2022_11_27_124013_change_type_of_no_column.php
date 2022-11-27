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
        Schema::table('vocabulary', function (Blueprint $table) {
            $table->integer('no')->change();
        });
        Schema::table('kanji', function (Blueprint $table) {
            $table->integer('no')->change();
        });
        Schema::table('adverb', function (Blueprint $table) {
            $table->integer('no')->change();
        });
        Schema::table('grammar', function (Blueprint $table) {
            $table->integer('no')->change();
        });
        Schema::table('word_formation', function (Blueprint $table) {
            $table->integer('no')->change();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vocabulary', function (Blueprint $table) {
            $table->string('no')->change();
        });
        Schema::table('kanji', function (Blueprint $table) {
            $table->string('no')->change();
        });
        Schema::table('adverb', function (Blueprint $table) {
            $table->string('no')->change();
        });
        Schema::table('grammar', function (Blueprint $table) {
            $table->string('no')->change();
        });
        Schema::table('word_formation', function (Blueprint $table) {
            $table->string('no')->change();
        });
    }
};
