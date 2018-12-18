<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePressesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('presses', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('url_title_id')->unsigned();
			$table->foreign('url_title_id')->references('id')->on('imagen_depots')->onDelete('cascade');
			$table->integer('url_image_id')->unsigned();
			$table->foreign('url_image_id')->references('id')->on('imagen_depots')->onDelete('cascade');
			$table->string('slug')->unique();
			$table->string('title');
			$table->text('description');

			// tipo de prensa [ {'0', comunicados} , {'1',entrevistas} ,{'2',fotografias},{'3',noticias},{'4',videos}]
			$table->integer('type_id');
			$table->timestamps();
			// 0 : activo , 1 : inactivo
			$table->integer('status');
			$table->text('url_string')->nullable(true);

			$table->date('publish');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('presses');
	}
}
