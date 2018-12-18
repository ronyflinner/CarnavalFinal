<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('videos', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('url_image_id')->unsigned();
			$table->foreign('url_image_id')->references('id')->on('imagen_depots')->onDelete('cascade');
			$table->text('url_video');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('videos');
	}
}
