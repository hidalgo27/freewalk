<?php

namespace App\Http\Controllers\Page;

use App\Destino;
use App\DestinoGrupo;
use App\DestinoGrupoIdioma;
use App\DestinoInicio;
use App\DestinoInicioIdioma;
use App\LugarRecojo;
use App\Tour;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomepageController extends Controller
{
    public function index($idioma = NULL){


        SEOMeta::setTitle('Home');
        SEOMeta::setDescription('This is my page description');
        SEOMeta::setCanonical('https://codecasts.com.br/lesson');
        OpenGraph::addImage('https://codecasts.com.br/lesson');
//        SEOMeta::addAlternateLanguage('es', 'español.com');
        $alternateLanguages[] = ['lang' => 'es', 'url' => '.pe'];
        $alternateLanguages[] = ['lang' => 'en', 'url' => '.com'];

        SEOMeta::addAlternateLanguages($alternateLanguages);

        OpenGraph::setDescription('This is my page description');
        OpenGraph::setTitle('Home 3');

        $locale = App::getLocale();
        $destinos_inicio = DestinoInicio::where('idioma', $locale)->get();

        foreach ( $destinos_inicio as $destinos_inicio2) {
            Session::put('id_'.$destinos_inicio2->id, $destinos_inicio2->id);
        }

        $destino = Destino::all();
//        dd($destino);
//        if (App::isLocale('en')) {
//            //
//        }

        return view('page.home',
            compact(
                'destinos_inicio',
                'locale',
                'destino'
            ));
    }
    public function index2($idioma){
        $locale = App::getLocale();
//        $destinos_inicio = DestinoInicio::with(['traducciones'=>function ($query) use  ($locale) { $query->where('idioma', $locale);}])->get();
        $destino_inicio_tr = DestinoInicioIdioma::where('idioma', $locale)->pluck('destino_inicio_relacion_id')->toArray();

//        dd($destino_inicio_tr);
        $destinos_inicio = DestinoInicio::whereIn('id', $destino_inicio_tr)->get();
        $destino = Destino::all();
        foreach ( $destinos_inicio as $destinos_inicio2) {
            Session::put('id_'.$destinos_inicio2->id, $destinos_inicio2->id);
        }
//        dd($destinos_inicio);
        return view('page.home',
            compact(
                'destinos_inicio',
                'locale',
                'destino'
            ));
    }
    public function destination($titile){

        $locale = App::getLocale();
        $destino_grupo = DestinoGrupo::with('destino','destino.lugares_recojo')->where('id', $titile)->get();
        $destino = Destino::all();
        return view('page.destination', compact('locale', 'destino_grupo', 'destino'));
    }
    public function destination_show(){
        $locale = App::getLocale();
        return view('page.destinations-show', compact('locale'));
    }

    public function destination_tour($destino, $title){
        $locale = App::getLocale();
        $url = str_replace('-', ' ', $title);
        $tour = Tour::with('lugar_recojo')->where('url', $url)->get();
        $destino = Destino::all();
        return view('page.destination-tours', compact('locale', 'tour','destino'));
    }



    public function lang($locale){
        Session::put('locale', $locale);
        if ($locale=='en') {
            return redirect()->route('home_path');
        }else{
            return redirect()->route('home2_path', $locale);
        }

    }

    public function lang_agrupados($id, $idioma){

        Session::put('locale', $idioma);

        $id_sesion_get = session()->get('id_'.$id);

//        if (empty($id_sesion_get)){
//            Session::put('id_'.$id, $id);
//        }

//        if ($id_sesion_get){
//
//        }

//        $id_sesion_get_2 = session()->get('id_'.$id);

        $destino_grupo_idiomas = DestinoGrupoIdioma::where('destino_grupo_padre_id', $id_sesion_get)->where('idioma', $idioma)->first();

        if ($idioma=='en') {
            return redirect()->route('destination_path', $destino_grupo_idiomas->destino_grupo_relacion_id);

        }else{
            return redirect()->route('destination_path', $destino_grupo_idiomas->destino_grupo_relacion_id);
        }

    }

}
