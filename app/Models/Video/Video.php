<?php

namespace App\Models\Video;

use Illuminate\Database\Eloquent\Model;

class Video extends Model {
	//
	protected $table = 'video';

	protected $fillable = [
		'url_image_id', 'url_video',
	];

	public function imagenDepotVideo_Link() {
		return $this->belongsTo(ImagenDepot::class, 'url_image_id');
	}
}
