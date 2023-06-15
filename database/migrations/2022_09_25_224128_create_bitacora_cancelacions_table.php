<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitacoraCancelacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacora_cancelacions', function (Blueprint $table) {
            $table->id();
            $table->string("motivo");
            $table->string("userCreator");
<<<<<<< HEAD
            $table->foreignId('carts_id');
=======
            $table->integer('carts_id');
>>>>>>> 6b8765f2ffc0feead847dd743999658cccd28c92
            $table->string("cSistema");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bitacora_cancelacions');
    }
}
