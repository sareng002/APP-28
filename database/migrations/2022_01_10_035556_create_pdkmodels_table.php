<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdkmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdkmodels', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('nik',16);
            $table->string('kk',16);
            $table->string('nama',100);
            $table->string('jenis_kelamin',10);
            $table->string('tempat_lahir',100);
            $table->date('tgl_lahir');
            $table->string('alamat',100);
            $table->string('pekerjaan',50);
            $table->string('agama',50);
            $table->string('SHDK',50);
            $table->softDeletes();
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
        Schema::dropIfExists('pdkmodels');
    }
}
