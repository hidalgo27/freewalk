<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Admin
// Route::get('/admin/home', 'Admin\HomepageController@index')->name('home');

Route::get('/admin/home',['uses'=>'Admin\HomepageController@index','as'=>'admin.home.path']);
// Inicio
Route::get('/admin/inicio/index',['uses'=>'Admin\InicioController@index','as'=>'admin.inicio.index.path']);
Route::get('/admin/inicio/create',['uses'=>'Admin\InicioController@create','as'=>'admin.inicio.create.path']);
Route::post('/admin/inicio/store',['uses'=>'Admin\InicioController@store','as'=>'admin.inicio.store.path']);
Route::get('/admin/inicio/{id}/edit',['uses'=>'Admin\InicioController@edit','as'=>'admin.inicio.edit.path']);
Route::patch('/admin/inicio/{id}/update',['uses'=>'Admin\InicioController@update','as'=>'admin.inicio.update.path']);
Route::get('/admin/inicioss/aaa/imagen/{filename}', ['uses' => 'Admin\InicioController@get_imagen','as' => 'admin.inicio.get_imagen.path']);
Route::get('/admin/inicio/{id}/destroy',['uses'=>'Admin\InicioController@destroy','as'=>'admin.inicio.destroy.path']);

Route::get('/admin/inicio/{id}/{idioma}/{arreglo}/create',['uses'=>'Admin\InicioController@index_idioma_create','as'=>'admin.inicio.index.idioma.create.path']);
Route::post('/admin/inicio/{id}/{idioma}/{arreglo}/store',['uses'=>'Admin\InicioController@index_idioma_store','as'=>'admin.inicio.index.idioma.store.path']);
Route::get('/admin/inicio/{id}/{idioma}/{arreglo}/edit',['uses'=>'Admin\InicioController@index_idioma_edit','as'=>'admin.inicio.index.idioma.edit.path']);
Route::patch('/admin/inicio/{id}/{idioma}/{arreglo}/update',['uses'=>'Admin\InicioController@index_idioma_update','as'=>'admin.inicio.index.idioma.update.path']);

// destino
Route::get('/admin/home',['uses'=>'Admin\HomepageController@index','as'=>'admin.home.path']);

Route::get('/admin/destinos/index',['uses'=>'Admin\DestinoController@index','as'=>'admin.destino.index.path']);
Route::get('/admin/destinos/create',['uses'=>'Admin\DestinoController@create','as'=>'admin.destino.create.path']);
Route::post('/admin/destinos/store',['uses'=>'Admin\DestinoController@store','as'=>'admin.destino.store.path']);
Route::get('/admin/destinos/{id}/edit',['uses'=>'Admin\DestinoController@edit','as'=>'admin.destino.edit.path']);
Route::patch('/admin/destinos/{id}/update',['uses'=>'Admin\DestinoController@update','as'=>'admin.destino.update.path']);
Route::get('/admin/destinos/{id}/destroy',['uses'=>'Admin\DestinoController@destroy','as'=>'admin.destino.destroy.path']);

Route::get('/admin/destinos/{id}/{idioma}/{arreglo}/create',['uses'=>'Admin\DestinoController@index_idioma_create','as'=>'admin.destinos.index.idioma.create.path']);
Route::post('/admin/destinos/{id}/{idioma}/{arreglo}/store',['uses'=>'Admin\DestinoController@index_idioma_store','as'=>'admin.destinos.index.idioma.store.path']);
Route::get('/admin/destinos/{id}/{idioma}/{arreglo}/edit',['uses'=>'Admin\DestinoController@index_idioma_edit','as'=>'admin.destinos.index.idioma.edit.path']);
Route::patch('/admin/destinos/{id}/{idioma}/{arreglo}/update',['uses'=>'Admin\DestinoController@index_idioma_update','as'=>'admin.destinos.index.idioma.update.path']);

// idiomas
Route::get('/admin/idioma/index',['uses'=>'Admin\IdiomaController@index','as'=>'admin.idioma.index.path']);
Route::get('/admin/idioma/create',['uses'=>'Admin\IdiomaController@create','as'=>'admin.idioma.create.path']);
Route::post('/admin/idioma/store',['uses'=>'Admin\IdiomaController@store','as'=>'admin.idioma.store.path']);
Route::get('/admin/idioma/{id}/edit',['uses'=>'Admin\IdiomaController@edit','as'=>'admin.idioma.edit.path']);
Route::patch('/admin/idioma/{id}/update',['uses'=>'Admin\IdiomaController@update','as'=>'admin.idioma.update.path']);
Route::get('/admin/idioma/{id}/destroy',['uses'=>'Admin\IdiomaController@destroy','as'=>'admin.idioma.destroy.path']);

// destinos inicio
Route::get('/admin/destinos-inicio/index',['uses'=>'Admin\DestinoInicioController@index','as'=>'admin.destino-inicio.index.path']);
Route::get('/admin/destinos-inicio/create',['uses'=>'Admin\DestinoInicioController@create','as'=>'admin.destino-inicio.create.path']);
Route::post('/admin/destinos-inicio/store',['uses'=>'Admin\DestinoInicioController@store','as'=>'admin.destino-inicio.store.path']);
Route::get('/admin/destinos-inicio/{id}/edit',['uses'=>'Admin\DestinoInicioController@edit','as'=>'admin.destino-inicio.edit.path']);
Route::patch('/admin/destinos-inicio/{id}/update',['uses'=>'Admin\DestinoInicioController@update','as'=>'admin.destino-inicio.update.path']);
Route::get('/admin/destinos-inicio/{id}/destroy',['uses'=>'Admin\DestinoInicioController@destroy','as'=>'admin.destino-inicio.destroy.path']);
Route::post('/admin/destinos-inicio/mostrar-destinos',['uses'=>'Admin\DestinoController@mostrar_destinos','as'=>'admin.destino.mostrar_destinos.path']);
Route::get('/admin/destinos-inicio/imagen/{filename}', ['uses' => 'Admin\DestinoInicioController@get_imagen','as' => 'admin.destino_inicio.get_imagen.path']);

Route::get('/admin/destinos-inicio/{id}/{idioma}/{arreglo}/create',['uses'=>'Admin\DestinoInicioController@index_idioma_create','as'=>'admin.destinos-inicio.index.idioma.create.path']);
Route::post('/admin/destinos-inicio/{id}/{idioma}/{arreglo}/store',['uses'=>'Admin\DestinoInicioController@index_idioma_store','as'=>'admin.destinos-inicio.index.idioma.store.path']);
Route::get('/admin/destinos-inicio/{id}/{idioma}/{arreglo}/edit',['uses'=>'Admin\DestinoInicioController@index_idioma_edit','as'=>'admin.destinos-inicio.index.idioma.edit.path']);
Route::patch('/admin/destinos-inicio/{id}/{idioma}/{arreglo}/update',['uses'=>'Admin\DestinoInicioController@index_idioma_update','as'=>'admin.destinos-inicio.index.idioma.update.path']);

// destinos grupo
Route::get('/admin/destinos-grupo/index',['uses'=>'Admin\DestinoGrupoController@index','as'=>'admin.destino-grupo.index.path']);
Route::get('/admin/destinos-grupo/create',['uses'=>'Admin\DestinoGrupoController@create','as'=>'admin.destino-grupo.create.path']);
Route::post('/admin/destinos-grupo/store',['uses'=>'Admin\DestinoGrupoController@store','as'=>'admin.destino-grupo.store.path']);
Route::get('/admin/destinos-grupo/{id}/edit',['uses'=>'Admin\DestinoGrupoController@edit','as'=>'admin.destino-grupo.edit.path']);
Route::get('/admin/destinos-grupo/{id}/lugares-visitar',['uses'=>'Admin\DestinoGrupoController@lugares_visitar','as'=>'admin.destino-grupo.lugares-visitar.path']);
Route::patch('/admin/destinos-grupo/{id}/update',['uses'=>'Admin\DestinoGrupoController@update','as'=>'admin.destino-grupo.update.path']);
Route::get('/admin/destinos-grupo/{id}/destroy',['uses'=>'Admin\DestinoGrupoController@destroy','as'=>'admin.destino-grupo.destroy.path']);
Route::post('/admin/destinos-grupo/mostrar-destinos',['uses'=>'Admin\DestinoController@mostrar_destinos','as'=>'admin.destino.mostrar_destinos.path']);
Route::get('/admin/destinos-grupo/imagen/{filename}', ['uses' => 'Admin\DestinoGrupoController@get_imagen','as' => 'admin.destino_grupo.get_imagen.path']);

Route::get('/admin/destinos-grupo/{id}/{idioma}/{arreglo}/create',['uses'=>'Admin\DestinoGrupoController@index_idioma_create','as'=>'admin.destinos-grupo.index.idioma.create.path']);
Route::post('/admin/destinos-grupo/{id}/{idioma}/{arreglo}/store',['uses'=>'Admin\DestinoGrupoController@index_idioma_store','as'=>'admin.destinos-grupo.index.idioma.store.path']);
Route::get('/admin/destinos-grupo/{id}/{idioma}/{arreglo}/edit',['uses'=>'Admin\DestinoGrupoController@index_idioma_edit','as'=>'admin.destinos-grupo.index.idioma.edit.path']);
Route::patch('/admin/destinos-grupo/{id}/{idioma}/{arreglo}/update',['uses'=>'Admin\DestinoGrupoController@index_idioma_update','as'=>'admin.destinos-grupo.index.idioma.update.path']);

Route::post('/admin/destinos-grupo-lugares-visitar/store',['uses'=>'Admin\DestinoGrupoController@lugares_visitar_store','as'=>'admin.destino-grupo.lugares-visitar.store.path']);
Route::get('/admin/destinos-grupo-lugares-visitar/{id}/destroy',['uses'=>'Admin\DestinoGrupoController@lugares_visitar_destroy','as'=>'admin.destino-grupo.lugares-visitar.destroy.path']);


Route::get('/admin/destinos-grupo/{id}/atractivos/index',['uses'=>'Admin\DestinoGrupoController@atractivos_index','as'=>'admin.destino-grupo.atractivos.index.path']);
Route::get('/admin/destinos-grupo/{id}/atractivos/create',['uses'=>'Admin\DestinoGrupoController@atractivos_create','as'=>'admin.destino-grupo.atractivos.create.path']);
Route::post('/admin/destinos-grupo/{id}/atractivos/store',['uses'=>'Admin\DestinoGrupoController@atractivos_store','as'=>'admin.destino-grupo.atractivos.store.path']);
Route::get('/admin/destinos-grupo/{destino_grupo_id}/atractivos/{id}/edit',['uses'=>'Admin\DestinoGrupoController@atractivos_edit','as'=>'admin.destino-grupo.atractivos.edit.path']);
Route::patch('/admin/destinos-grupo/{destino_grupo_id}/atractivos/{id}/update',['uses'=>'Admin\DestinoGrupoController@atractivos_update','as'=>'admin.destino-grupo.atractivos.update.path']);
Route::get('/admin/destinos-grupo/{id}/atractivos/imagen/{filename}', ['uses' => 'Admin\DestinoGrupoController@atractivos_get_imagen','as' => 'admin.destino_grupo.atractivos.get_imagen.path']);
Route::get('/admin/destinos-grupo/{destino_grupo_id}/atractivos/{id}/destroy',['uses'=>'Admin\DestinoGrupoController@atractivos_destroy','as'=>'admin.destino-grupo.atractivos.destroy.path']);

// preguntas
Route::get('/admin/destinos-grupo/{id}/preguntas/index',['uses'=>'Admin\DestinoGrupoController@preguntas_index','as'=>'admin.destino-grupo.preguntas.index.path']);
Route::get('/admin/destinos-grupo/{id}/preguntas/create',['uses'=>'Admin\DestinoGrupoController@preguntas_create','as'=>'admin.destino-grupo.preguntas.create.path']);
Route::post('/admin/destinos-grupo/{id}/preguntas/store',['uses'=>'Admin\DestinoGrupoController@preguntas_store','as'=>'admin.destino-grupo.preguntas.store.path']);
Route::get('/admin/destinos-grupo/{destino_grupo_id}/preguntas/{id}/edit',['uses'=>'Admin\DestinoGrupoController@preguntas_edit','as'=>'admin.destino-grupo.preguntas.edit.path']);
Route::patch('/admin/destinos-grupo/{destino_grupo_id}/preguntas/{id}/update',['uses'=>'Admin\DestinoGrupoController@preguntas_update','as'=>'admin.destino-grupo.preguntas.update.path']);
Route::get('/admin/destinos-grupo/{id}/preguntas/imagen/{filename}', ['uses' => 'Admin\DestinoGrupoController@preguntas_get_imagen','as' => 'admin.destino_grupo.preguntas.get_imagen.path']);
Route::get('/admin/destinos-grupo/{destino_grupo_id}/preguntas/{id}/destroy',['uses'=>'Admin\DestinoGrupoController@preguntas_destroy','as'=>'admin.destino-grupo.preguntas.destroy.path']);

// destinos tours
Route::get('/admin/tour/index',['uses'=>'Admin\TourController@index','as'=>'admin.tour.index.path']);
Route::get('/admin/tour/create',['uses'=>'Admin\TourController@create','as'=>'admin.tour.create.path']);
Route::post('/admin/tour/store',['uses'=>'Admin\TourController@store','as'=>'admin.tour.store.path']);
Route::get('/admin/tour/{id}/edit',['uses'=>'Admin\TourController@edit','as'=>'admin.tour.edit.path']);
Route::get('/admin/tour/galeria/{id}/index',['uses'=>'Admin\TourController@galeria_index','as'=>'admin.tour.galeria.index.path']);
Route::patch('/admin/tour/{id}/update',['uses'=>'Admin\TourController@update','as'=>'admin.tour.update.path']);
Route::get('/admin/tour/{id}/destroy',['uses'=>'Admin\TourController@destroy','as'=>'admin.tour.destroy.path']);
Route::post('/admin/tour/mostrar-destinos',['uses'=>'Admin\DestinoController@mostrar_destinos','as'=>'admin.destino.mostrar_destinos.path']);
Route::get('/admin/tour/imagen/{filename}', ['uses' => 'Admin\TourController@get_imagen','as' => 'admin.tour.get_imagen.path']);
Route::post('/admin/tour/galeria/store',['uses'=>'Admin\TourController@galeria_store','as'=>'admin.tour.galeria.store.path']);
Route::get('/admin/tour/galeria/{id}/destroy',['uses'=>'Admin\TourController@galeria_destroy','as'=>'admin.tour.galeria.destroy.path']);
Route::post('/admin/destinos-inicio/mostrar-lugar-recojo',['uses'=>'Admin\LugarRecojoController@mostrar_lugar_recojo','as'=>'admin.destino.mostrar_lugar_recojo.path']);
Route::get('/admin/tour/{id}/{idioma}/{arreglo}/create',['uses'=>'Admin\TourController@index_idioma_create','as'=>'admin.tour.index.idioma.create.path']);
Route::post('/admin/tour/{id}/{idioma}/{arreglo}/store',['uses'=>'Admin\TourController@index_idioma_store','as'=>'admin.tour.index.idioma.store.path']);
Route::get('/admin/tour/{id}/{idioma}/{arreglo}/edit',['uses'=>'Admin\TourController@index_idioma_edit','as'=>'admin.tour.index.idioma.edit.path']);
Route::patch('/admin/tour/{id}/{idioma}/{arreglo}/update',['uses'=>'Admin\TourController@index_idioma_update','as'=>'admin.tour.index.idioma.update.path']);

// destinos lugar recojo
Route::get('/admin/lugar-recojo/index',['uses'=>'Admin\LugarRecojoController@index','as'=>'admin.lugar_recojo.index.path']);
Route::get('/admin/lugar-recojo/create',['uses'=>'Admin\LugarRecojoController@create','as'=>'admin.lugar_recojo.create.path']);
Route::post('/admin/lugar-recojo/store',['uses'=>'Admin\LugarRecojoController@store','as'=>'admin.lugar_recojo.store.path']);
Route::get('/admin/lugar-recojo/{id}/edit',['uses'=>'Admin\LugarRecojoController@edit','as'=>'admin.lugar_recojo.edit.path']);
Route::get('/admin/lugar-recojo/galeria/{id}/index',['uses'=>'Admin\LugarRecojoController@galeria_index','as'=>'admin.lugar_recojo.galeria.index.path']);
Route::patch('/admin/lugar-recojo/{id}/update',['uses'=>'Admin\LugarRecojoController@update','as'=>'admin.lugar_recojo.update.path']);
Route::get('/admin/lugar-recojo/{id}/destroy',['uses'=>'Admin\LugarRecojoController@destroy','as'=>'admin.lugar_recojo.destroy.path']);
Route::post('/admin/lugar-recojo/mostrar-destinos',['uses'=>'Admin\DestinoController@mostrar_destinos','as'=>'admin.destino.mostrar_destinos.path']);
Route::get('/admin/lugar-recojo/imagen/{filename}', ['uses' => 'Admin\LugarRecojoController@get_imagen','as' => 'admin.lugar_recojo.get_imagen.path']);
Route::post('/admin/lugar-recojo/galeria/store',['uses'=>'Admin\LugarRecojoController@galeria_store','as'=>'admin.lugar_recojo.galeria.store.path']);
Route::get('/admin/lugar-recojo/galeria/{id}/destroy',['uses'=>'Admin\LugarRecojoController@galeria_destroy','as'=>'admin.lugar_recojo.galeria.destroy.path']);


Route::get('/admin/lugar-recojo/{id}/{idioma}/{arreglo}/create',['uses'=>'Admin\LugarRecojoController@index_idioma_create','as'=>'admin.lugar-recojo.index.idioma.create.path']);
Route::post('/admin/lugar-recojo/{id}/{idioma}/{arreglo}/store',['uses'=>'Admin\LugarRecojoController@index_idioma_store','as'=>'admin.lugar-recojo.index.idioma.store.path']);
Route::get('/admin/lugar-recojo/{id}/{idioma}/{arreglo}/edit',['uses'=>'Admin\LugarRecojoController@index_idioma_edit','as'=>'admin.lugar-recojo.index.idioma.edit.path']);
Route::patch('/admin/lugar-recojo/{id}/{idioma}/{arreglo}/update',['uses'=>'Admin\LugarRecojoController@index_idioma_update','as'=>'admin.lugar-recojo.index.idioma.update.path']);

//Page
//if (App::isLocale('en')){
    Route::get('/', [
        'uses' => 'Page\HomepageController@index',
        'as' => 'home_path',
    ]);

    Route::get('destination/{title}', [
        'uses' => 'Page\HomepageController@destination',
        'as' => 'destination_path',
    ]);

    Route::get('/{idioma}', [
        'uses' => 'Page\HomepageController@index2',
        'as' => 'home2_path',
    ]);




Route::get('/destination-show', [
    'uses' => 'Page\HomepageController@destination_show',
    'as' => 'destination_show_path',
]);


Route::get('/tours/{destino}/{title}', [
    'uses' => 'Page\HomepageController@destination_tour',
    'as' => 'destination_tour_path',
]);


//middleware


//Route::group(['middleware' => ['web']], function () {
//
//    Route::get('/', [
//        'uses' => 'Page\HomepageController@index',
//        'as' => 'home_path',
//    ]);
//
////    Route::get('lang/{lang}', function ($lang) {
////        session(['lang' => $lang]);
////        return \Redirect::back();
////    })->where([
////        'lang' => 'en|es'
////    ]);
//
//    Route::get('lang/{lang}', function ($locale){
//        Session::put('lang', $locale);
//        return redirect()->back();
//    });
//
//});
//Route::get('locale/{locale}', function ($locale){
//    Session::put('locale', $locale);
////    return redirect()->back();
//});
Route::get('/idioma/{locale}/', [
    'uses' => 'Page\HomepageController@lang',
    'as' => 'lang_path',
]);

Route::get('/idioma/lang_agrupados/{id}/{idioma}', [
    'uses' => 'Page\HomepageController@lang_agrupados',
    'as' => 'lang_agrupados_path',
]);

Route::get('/idioma/lang_tours/{id}/{idioma}/{destino}', [
    'uses' => 'Page\HomepageController@lang_tours',
    'as' => 'lang_tours_path',
]);
