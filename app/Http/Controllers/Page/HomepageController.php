<?php

namespace App\Http\Controllers\Page;

use App\Destino;
use App\DestinoGrupo;
use App\DestinoInicio;
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
//        SEOMeta::addAlternateLanguage('es', 'español.com');
//        $alternateLanguages[] = ['lang' => 'es', 'url' => '.xom'];

//        SEOMeta::addAlternateLanguages($alternateLanguages);

        OpenGraph::setDescription('This is my page description');
        OpenGraph::setTitle('Home');
        OpenGraph::setUrl('http://current.url.com');
//        OpenGraph::addProperty('type', 'articles');
//        OpenGraph::addProperty('locale', 'pt-br');
//        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

//        TwitterCard::setTitle('Homepage');
//        TwitterCard::setSite('@LuizVinicius73');
//
//        JsonLd::setTitle('Homepage');
//        JsonLd::setDescription('This is my page description');
//        JsonLd::addImage('https://codecasts.com.br/img/logo.jpg');

        // OR

//        SEOTools::setTitle('Home');
//        SEOTools::setDescription('This is my page description');
//        SEOTools::opengraph()->setUrl('http://current.url.com');
//        SEOTools::setCanonical('https://codecasts.com.br/lesson');
//        SEOTools::opengraph()->addProperty('type', 'articles');
//        SEOTools::twitter()->setSite('@LuizVinicius73');
//        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');


        $locale = App::getLocale();
        $destinos_inicio = DestinoInicio::where('idioma', $locale)->get();

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
        $destinos_inicio = DestinoInicio::where('idioma', $locale)->get();
//        if (App::isLocale('en')) {
//            //
//        }
        $destino = Destino::all();
        dd($destino);
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



    public function lang($locale,$origen){
        Session::put('locale', $locale);
        Session::put('origen', $origen);
        if ($locale=='en') {
            return redirect()->route('home_path');
        }else{
            return redirect()->route('home2_path', $locale);
        }

    }
}
