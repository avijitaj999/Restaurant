<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateReservationsTable extends Migration
    {
        public function up()
        {
            Schema::create('reservations', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email');
                $table->string('phone');
                $table->date('date');
                $table->time('time');
                $table->integer('person');
                $table->text('massage');
                $table->boolean('status')->default(false);
                $table->timestamps();
            });
        }
    
        public function down()
        {
            Schema::dropIfExists('reservations');
        }
    }
    
;
