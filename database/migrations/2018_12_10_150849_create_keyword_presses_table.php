<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeywordPressesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('keyword_presses', function (Blueprint $table) {
			$table->increments('id');

			$table->integer('press_id')->unsigned();
			$table->foreign('press_id')->references('id')->on('presses')->onDelete('cascade');

			$table->integer('keyword_id')->unsigned();
			$table->foreign('keyword_id')->references('id')->on('keywords')->onDelete('cascade');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('keyword_presses');
	}
}
