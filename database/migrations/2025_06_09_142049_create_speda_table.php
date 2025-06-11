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
        Schema::create('speda', function (Blueprint $table) {
            $table->id(); // ID otomatis dan primary key
            $table->string('merksepeda', 25); // VARCHAR(25)
            $table->integer('hargasepeda');   // INT
            $table->boolean('tersedia');      // BOOLEAN
            $table->float('berat');           // FLOAT
            // Hapus timestamps jika tidak perlu
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speda');
    }
};
