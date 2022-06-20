<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EdctamperController extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edctamper', function (Blueprint $table) {
            $table->id();
            $table->string('sn', 35);
            $table->string('merek', 20);
            $table->string('jenis', 20);
            $table->char('type', 20);
            $table->string('Kanca', 50);
            $table->string('keterangan', 20);
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
        Schema::dropIfExists('edctamper');
    }
}
