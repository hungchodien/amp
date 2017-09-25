<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableNewsMain extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('TheLoai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Ten');
            $table->string('TenKhongDau');
            $table->timestamps();
        });
        Schema::create('LoaiTin', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTheLoai')->unsigned();
            $table->foreign('idTheLoai')->references('id')->on('TheLoai');
            $table->string('Ten');
            $table->integer('Publish')->default(1);
            $table->longText('Customfield')->nullable();
            $table->string('TenKhongDau');
            $table->timestamps();
        });
        Schema::create('TagTin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Ten');
            $table->string('TenKhongDau');
            $table->timestamps();
        });
        Schema::create('TinTuc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TieuDe');
            $table->string('TieuDeKhongDau');
            $table->text('TomTat')->nullable();
            $table->longText('NoiDung')->nullable();
            $table->string('Hinh')->nullable();
            $table->string('TagTenKhongDau')->nullable();
            $table->integer('NoiBat')->default(0);
            $table->integer('SoLuotXem')->default(0);
            $table->integer('Publish')->default(1);
            $table->longText('Customfield')->nullable();
            $table->integer('idLoaiTin')->unsigned();
            $table->foreign('idLoaiTin')->references('id')->on('LoaiTin');
            $table->timestamps();
        });
        Schema::create('Comment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('Users');
            $table->integer('idTinTuc')->unsigned();
            $table->foreign('idTinTuc')->references('id')->on('TinTuc');
            $table->string('NoiDung');
            $table->integer('Publish')->default(1);
            $table->timestamps();
        });
        Schema::create('Slide', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Ten');
            $table->string('Hinh');
            $table->string('NoiDung');
            $table->string('link');
            $table->integer('Publish')->default(1);
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
        Schema::drop('Slide');
        Schema::drop('Comment');
        Schema::drop('TinTuc');
        Schema::drop('TagTin');
        Schema::drop('LoaiTin');
        Schema::drop('TheLoai');
	}

}
