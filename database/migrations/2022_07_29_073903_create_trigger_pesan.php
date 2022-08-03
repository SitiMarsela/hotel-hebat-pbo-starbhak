<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER pesan AFTER INSERT ON pemesanan FOR EACH ROW BEGIN   
        UPDATE kamar SET jml_kamar = jml_kamar - new.jumlah WHERE id = new.id; END ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_pesan');
    }
};
