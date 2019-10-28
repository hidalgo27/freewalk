<?php

namespace App\Http\Controllers\Page;

use App\Destino;
use App\DestinoGrupo;
use App\DestinoGrupoIdioma;
use App\DestinoInicio;
use App\DestinoInicioIdioma;
use App\Inicio;
use App\LugarRecojo;
use App\Tour;
use App\TourRelacionado;
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

        $destino_inicio_idiomas = DestinoInicioIdioma::all()->unique('idioma');

        $destino = Destino::all();

        $inicio = Inicio::where('idioma', $locale)->first();

        return view('page.home',
            compact(
                'destinos_inicio',
                'locale',
                'destino',
                'destino_inicio_idiomas',
                'inicio'
            ));
    }
    public function index2($idioma){
        $locale = App::getLocale();

        $destino_inicio_tr = DestinoInicioIdioma::where('idioma', $locale)->pluck('destino_inicio_relacion_id')->toArray();

        $destinos_inicio = DestinoInicio::whereIn('id', $destino_inicio_tr)->get();
        $destino = Destino::all();

        $destino_inicio_idiomas = DestinoInicioIdioma::all()->unique('idioma');

        $inicio = Inicio::where('idioma', $locale)->first();

        return view('page.home',
            compact(
                'destinos_inicio',
                'locale',
                'destino',
                'destino_inicio_idiomas',
                'inicio'
            ));
    }
    public function destination($locale, $titile){
        $locale = App::getLocale();

        $destino_inicio = DestinoInicio::where('url', $titile)->where('idioma', $locale)->first();

//        dd($destino_inicio->destino_id);

        $destino_grupo_idioma_t = DestinoGrupoIdioma::where('destino_grupo_relacion_id', $destino_inicio->destino_id)->first();
        $destino_grupo_idioma = DestinoGrupoIdioma::where('destino_grupo_padre_id', $destino_grupo_idioma_t->destino_grupo_padre_id)->get();

        $destino_grupo = DestinoGrupo::with('traducciones','destino','destino.lugares_recojo')->where('id', $destino_inicio->id)->get();

        $destino = Destino::all();
        return view('page.destination', compact('locale', 'destino_grupo', 'destino','destino_grupo_idioma'));
    }
    public function destination_show(){
        $locale = App::getLocale();
        return view('page.destinations-show', compact('locale'));
    }

    public function destination_tour($lang, $destino_url, $url){
        $locale = App::getLocale();
//        $url = str_replace('-', ' ', $title);
        $tour = Tour::with('lugar_recojo')->where('url', $url)->first();

//        dd($tour);

        $tour_relacionados_t = TourRelacionado::where('tours_relacion_id', $tour->id)->first();

//        dd($tour->id);
        $tour_relacionados_tr = TourRelacionado::where('tours_padre_id', $tour_relacionados_t->tours_padre_id)->pluck('tours_relacion_id')->toArray();

        $tour_tr = Tour::whereIn('id', $tour_relacionados_tr)->get();

//        foreach ($tour_relacionados_tr as $tours_relacionados_tr){
//            $tour_relacionados[] = Tour::find($tours_relacionados_tr->tours_relacion_id);
//        }

//        dd($tour_relacionados);


        $destino = Destino::all();
        return view('page.destination-tours', compact('locale', 'tour','destino', 'destino_url', 'tour_tr'));
    }


    public function lang($locale){
        Session::put('locale', $locale);
        if ($locale=='en') {
            return redirect()->route('home_path');
        }else{
            return redirect()->route('home2_path', strtolower($locale));
        }

    }

    public function lang_agrupados($id, $idioma){

        Session::put('locale', $idioma);

        $destino_inicio = DestinoInicio::where('id', $id)->first();

        return redirect()->route('destination_path', [strtolower($idioma), $destino_inicio->url]);

    }

    public function lang_tours($url, $idioma, $destino_url){

        Session::put('locale', $idioma);

        return redirect()->route('destination_tour_path', [strtolower($idioma), $destino_url, $url]);

    }

}
