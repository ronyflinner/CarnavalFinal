<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Prensa\AgregarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EntrevistaController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('prensa.entrevista.index');
	}

	public function addFile($file) {
		if ($file->guessExtension() == 'jpeg' || $file->guessExtension() == 'png') {

			$slug = str_random(180);

			$newName = str_random(100); // crea nuevo nombre
			$guessFileExtension = $file->guessExtension();
			$path = $file->move('img', $newName . '.' . $guessFileExtension);

			$insertid = \DB::table('imagen_depots')->insertGetId(
				['path' => $path, 'type_id' => 0, 'status' => 0, 'slug' => $slug]);

			return $insertid;
		} else {
			return 0;
		}
	}

	/*public function slugGenerador() {

		while ($id) {
			$slug = str_random(180);
			$id = \DB::table('imagen_depots')->where('slug', $slug)->get();
		}
		return $id;
	}*/

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(AgregarRequest $request) {
		//

		//return view('prensa.fotografias.index');

		$title_entre = $request->input('title_entre');

		$url_p = $request->input('msg');

		$date = date_create($request->input('f_date'));
		$f_date = date_format($date, "Y/m/d");

		$f_message = $request->input('message');

		$slug = str_random(180);

		if ($request->file('f_secundaria') and $request->file('f_principal')) {
			$path_principal = $this->addFile($request->file('f_principal'));
			$path_secundaria = $this->addFile($request->file('f_secundaria'));

			$insertid = \DB::table('presses')->insertGetId(
				['url_title_id' => $path_principal, 'url_image_id' => $path_secundaria, 'status' => 0, 'title' => $title_entre, 'slug' => $slug, 'description' => $f_message, 'type_id' => 1, 'publish' => $f_date]);
			Session::flash('mensaje_success', 'Sus datos fueron guardados correctametne');

		} else if (!$request->file('f_secundaria') and $request->file('f_principal') and $url_p) {

			$path_principal = $this->addFile($request->file('f_principal'));

			$insertid = \DB::table('presses')->insertGetId(
				['url_title_id' => $path_principal, 'url_image_id' => 0, 'status' => 0, 'title' => $title_entre, 'slug' => $slug, 'description' => $f_message, 'type_id' => 1, 'publish' => $f_date, 'url_string' => $url_p]);

			Session::flash('mensaje_success', 'Sus datos fueron guardados correctametne');

		} else {
			Session::flash('mensaje_errors', 'Ingrese las imagenes');

		}

		return view('prensa.entrevista.index');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}

}
