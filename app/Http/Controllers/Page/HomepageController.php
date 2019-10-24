<?php

namespace App\Http\Controllers\Page;

use App\DestinoGrupo;
use App\DestinoInicio;
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
//        if (App::isLocale('en')) {
//            //
//        }
        return view('page.home',
            compact(
                'destinos_inicio',
                'locale'
            ));
    }
    public function index2($idioma){
        $locale = App::getLocale();
        $destinos_inicio = DestinoInicio::where('idioma', $locale)->get();
//        if (App::isLocale('en')) {
//            //
//        }
        return view('page.home',
            compact(
                'destinos_inicio',
                'locale'
            ));
    }
    public function destination($titile){
        $locale = App::getLocale();
        $destino_grupo = DestinoGrupo::with('destino','destino.lugares_recojo')->where('id', $titile)->get();
        return view('page.destination', compact('locale', 'destino_grupo'));
    }
    public function destination_show(){
        return view('page.destinations-show');
    }

    public function lang($locale){
        Session::put('locale', $locale);
        if ($locale=='en') {
            return redirect()->route('home_path');
        }else{
            return redirect()->route('home2_path', $locale);
        }

    }
}
