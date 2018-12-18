<?php

namespace App\Models\Imagen;

use Illuminate\Database\Eloquent\Model;

class ImagenDepot extends Model {
	protected $table = 'imagen_depots';

	protected $fillable = [
		'path', 'slug', 'type_id', 'status',
	];

	public static function insertData($data) {

		$value = DB::table('imagen_depots')->where('path', $data['path'])->get();
		if ($value->count() == 0) {
			$insertid = DB::table('imagen_depots')->insertGetId($data);
			return $insertid;
		} else {
			return 0;
		}

	}

}
