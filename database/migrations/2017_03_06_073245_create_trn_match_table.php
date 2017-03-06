<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrnMatchTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('trn_match', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_match');
            $table->integer('id_liga');
            $table->integer('id_team_home');
            $table->integer('id_team_away');
            $table->string('result_match')->nullable();
            $table->integer('score_team_home')->nullable();
            $table->integer('score_team_away')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('trn_match');
    }

}
