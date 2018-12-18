<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword_presses extends Model {
	//

	protected $table = 'keyword_presses';

	public function keyword_link() {
		return $this->belongsTo(Keyword::class, 'keyword_id');
	}

	public function presses_link() {
		return $this->belongsTo(Press::class, 'press_id');
	}
}
