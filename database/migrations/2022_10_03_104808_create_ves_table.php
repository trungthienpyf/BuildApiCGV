<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ves', function (Blueprint $table) {
            $table->id();
            $table->timestamp('ngayTao');
            $table->tinyInteger('trangThai');
            $table->string('giaVe');
            $table->foreignId('maLichChieu')->constrained('lich_chieus');
            $table->foreignId('maHoaDon')->constrained('hoa_dons');
            $table->foreignId('maGhe')->constrained('ghes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ves');
    }
}
