<?php
//Route::get('/', function () { return redirect('/admin/home'); });

/*Carnaval*/
Route::get('/carnaval/historiaCarnavalSaoPaulo', 'principal\CarnavalController@HistoriaCarnavalSaoPaolo')->name('carnaval.historiaSaoPaolo');
Route::get('/carnaval/sanBodromo', 'principal\CarnavalController@SanBodromo')->name('carnaval.SanBodromo');
Route::get('/carnaval/fechaRuta', 'principal\CarnavalController@fechaRuta')->name('carnaval.fechaRuta');

Route::get('/escuela/historiaEscuelaDeSamba', 'principal\CarnavalController@escuelaSamba')->name('escuela.historiaSamba');

Route::get('/escuela/LogrosReconocimiento', 'principal\CarnavalController@logrosReconocimiento')->name('escuela.LogrosReconocimiento');

/*RUTAS PUESTA EN ESCENA*/
Route::get('/peru/reseñaPeruEnElCarnaval', 'principal\CarnavalController@resenaCarnaval')->name('peru.resenaCarnaval');
Route::get('/peru/puestaEnEscena', 'principal\CarnavalController@puestaEscena')->name('peru.puestaEscena');

/*sub ruta*/
Route::get('/peru/puestaEnEscena/tramas', 'principal\CarnavalController@tramas')->name('peru.puestaEscena.tramas');
Route::get('/peru/puestaEnEscena/alegorias', 'principal\CarnavalController@alegorias')->name('peru.puestaEscena.alegorias');
Route::get('/peru/puestaEnEscena/carros', 'principal\CarnavalController@carros')->name('peru.puestaEscena.carros');
Route::get('/peru/puestaEnEscena/carnavalesco', 'principal\CarnavalController@carnavalesco')->name('peru.puestaEscena.carnavalesco');
Route::get('/peru/puestaEnEscena/vestuario', 'principal\CarnavalController@vestuario')->name('peru.puestaEscena.vestuario');
Route::get('/peru/puestaEnEscena/musica', 'principal\CarnavalController@musica')->name('peru.puestaEscena.musica');
Route::get('/peru/puestaEnEscena/coreografo', 'principal\CarnavalController@coreografo')->name('peru.puestaEscena.coreografo');

/*RUTAS PUESTA EN ESCENA*/

Route::get('/marca/narcaPeru', 'principal\CarnavalController@marcaPeru')->name('marca.marcaPeru');

Route::get('/salaDePrensa/comunicado', 'principal\CarnavalController@comunicado')->name('salaPrensa.comunicado');

Route::get('/salaDePrensa/entrevista', 'principal\CarnavalController@entrevista')->name('salaPrensa.entrevista');

Route::get('/salaDePrensa/fotografia', 'principal\CarnavalController@fotografia')->name('salaPrensa.fotografia');

Route::get('/salaDePrensa/noticia', 'principal\CarnavalController@noticia')->name('salaPrensa.noticia');

Route::get('/salaDePrensa/video', 'principal\CarnavalController@video')->name('salaPrensa.video');

Route::get('/contacto', 'principal\CarnavalController@contacto')->name('contacto');

Route::get('/salaDePrensa/contenido/{id}', 'principal\CarnavalController@contenido')->name('contenido');

/*Escuela*/

/*Peru*/

/*Marca*/

/*Sala de Prensa*/

/*Sponsor*/

/*Contacto*/
Route::resource('/', 'principal\CarnavalController');

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

	Route::get('/home', 'HomeController@index');
	Route::resource('permissions', 'Admin\PermissionsController');
	Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
	Route::resource('roles', 'Admin\RolesController');
	Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
	Route::resource('users', 'Admin\UsersController');
	Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

	// prensa
	Route::resource('comunicados', 'Admin\ComunicadosController');
	Route::resource('noticias', 'Admin\NoticiasController');
	Route::resource('entrevista', 'Admin\EntrevistaController');

	Route::post('saveFile/{request)}', 'Admin\FotografiaController@saveFile');
	Route::resource('fotografia', 'Admin\FotografiaController');

	Route::resource('videos', 'Admin\VideosController');
	Route::resource('noticiassearch', 'Admin\NoticasSearchController');
	Route::resource('comunicadosearch', 'Admin\ComunicadoSearchController');

});
