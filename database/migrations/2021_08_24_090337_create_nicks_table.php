<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNicksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nicks', function (Blueprint $table) {
            $table->id()->start_from(100000);
            $table->string('ingame', 11);
            $table->decimal('price', 12, 0);
            $table->integer('clan')->default(0)->length(1);
            $table->integer('level')->default(1)->length(3);
            $table->bigInteger('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('class_accs');
            $table->bigInteger('sv_id')->unsigned();
            $table->foreign('sv_id')->references('id')->on('servers');
            $table->string('images')->nullable();
            $table->text('notes');
            $table->string('username');
            $table->string('password');
            $table->integer('status')->default(0)->length(1);
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
        Schema::dropIfExists('nicks');
    }
}