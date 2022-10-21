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
        Schema::create('datamhsfts', function (Blueprint $table) {
            $table->string('npm');
            $table->string('nama');
            $table->string('prodi');
            $table->string('gender');
            $table->string('agama');
            $table->string('tempat');
            $table->string('ttl');
            $table->string('status');
            $table->string('nohp');
            $table->string('dosenPA');
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
        Schema::dropIfExists('datamhsfts');
    }
};
