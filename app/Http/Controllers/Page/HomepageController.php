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
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomepageController extends Controller
{
    public function index(){

        $locale = App::getLocale();
        $destinos_inicio = DestinoInicio::where('idioma', $locale)->get();

        $destino_inicio_idiomas = DestinoInicioIdioma::all()->unique('idioma');

        $destino = Destino::all();

        $inicio = Inicio::where('idioma', $locale)->first();



        //SEO
        SEOMeta::setTitle($inicio->seo_titulo);
        SEOMeta::setDescription($inicio->seo_descripcion);
        SEOMeta::setCanonical($inicio->seo_canonical);
        OpenGraph::addImage('https://www.freewalkingtoursperu.com/img/free-walking-tours-peru.jpg');
//        SEOMeta::addAlternateLanguage('es', 'español.com');
//        $alternateLanguages[] = ['lang' => 'es', 'url' => '.pe'];
//        $alternateLanguages[] = ['lang' => 'en', 'url' => '.com'];

//        SEOMeta::addAlternateLanguages($alternateLanguages);

        OpenGraph::setDescription($inicio->seo_descripcion);
        OpenGraph::setTitle($inicio->seo_titulo);

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

        //SEO
        SEOMeta::setTitle($inicio->seo_titulo);
        SEOMeta::setDescription($inicio->seo_descripcion);
        SEOMeta::setCanonical($inicio->seo_canonical);
        OpenGraph::addImage('https://www.freewalkingtoursperu.com/img/free-walking-tours-peru.jpg');
//        SEOMeta::addAlternateLanguage('es', 'español.com');
//        $alternateLanguages[] = ['lang' => 'es', 'url' => '.pe'];
//        $alternateLanguages[] = ['lang' => 'en', 'url' => '.com'];

//        SEOMeta::addAlternateLanguages($alternateLanguages);

        OpenGraph::setDescription($inicio->seo_descripcion);
        OpenGraph::setTitle($inicio->seo_titulo);

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

        $destino_inicio = DestinoGrupo::where('url', $titile)->where('idioma', $locale)->first();

        $destino_grupo_t = DestinoGrupo::where('destino_id', $destino_inicio->destino_id)->first();

        $destino_grupos = DestinoGrupo::with('traducciones','destino','destino.lugares_recojo')->where('destino_id', $destino_inicio->destino_id)->first();
        $destino_grupo_idioma_t = DestinoGrupoIdioma::where('destino_grupo_relacion_id', $destino_grupos->id)->first();
        $destino_grupo_idioma = DestinoGrupoIdioma::where('destino_grupo_padre_id', $destino_grupo_idioma_t->destino_grupo_padre_id)->get();

        $destino = Destino::all();

        //SEO
        SEOMeta::setTitle($destino_grupos->seo_titulo);
        SEOMeta::setDescription($destino_grupos->seo_descripcion);
        SEOMeta::setCanonical($destino_grupos->seo_canonical);
        OpenGraph::addImage('https://www.freewalkingtoursperu.com/img/free-walking-tours-peru.jpg');
//        SEOMeta::addAlternateLanguage('es', 'español.com');
//        $alternateLanguages[] = ['lang' => 'es', 'url' => '.pe'];
//        $alternateLanguages[] = ['lang' => 'en', 'url' => '.com'];

//        SEOMeta::addAlternateLanguages($alternateLanguages);

        OpenGraph::setDescription($destino_grupos->seo_descripcion);
        OpenGraph::setTitle($destino_grupos->seo_titulo);

        return view('page.destination', compact('locale', 'destino_grupos', 'destino','destino_grupo_idioma'));
    }
    public function destination_show(){
        $locale = App::getLocale();
        return view('page.destinations-show', compact('locale'));
    }

    public function destination_tour($lang, $destino_url, $url){
        $locale = App::getLocale();

        $tour = Tour::with('lugar_recojo')->where('url', $url)->first();
        $lugar_recojo = LugarRecojo::all();




        $tour_relacionados_t = TourRelacionado::where('tours_relacion_id', $tour->id)->first();

        $tour_relacionados_tr = TourRelacionado::where('tours_padre_id', $tour_relacionados_t->tours_padre_id)->pluck('tours_relacion_id')->toArray();

        $tour_tr = Tour::whereIn('id', $tour_relacionados_tr)->get();

        $destino = Destino::all();

        //SEO
        SEOMeta::setTitle($tour->seo_titulo);
        SEOMeta::setDescription($tour->seo_descripcion);
        SEOMeta::setCanonical($tour->seo_canonical);
        OpenGraph::addImage('https://www.freewalkingtoursperu.com/img/free-walking-tours-peru.jpg');
//        SEOMeta::addAlternateLanguage('es', 'español.com');
//        $alternateLanguages[] = ['lang' => 'es', 'url' => '.pe'];
//        $alternateLanguages[] = ['lang' => 'en', 'url' => '.com'];

//        SEOMeta::addAlternateLanguages($alternateLanguages);

        OpenGraph::setDescription($tour->seo_descripcion);
        OpenGraph::setTitle($tour->seo_titulo);

        return view('page.destination-tours', compact('locale', 'tour','destino', 'destino_url', 'tour_tr', 'lugar_recojo'));
    }


    public function booking($locale){
        $locale = App::getLocale();
        $destino = Destino::all();
        $destino_inicio_idiomas = DestinoInicioIdioma::all()->unique('idioma');
        return view('page.booking', compact('locale','destino','destino_inicio_idiomas'));
    }

    public function terms_conditions($locale){
        $locale = App::getLocale();
        $destino = Destino::all();
        $destino_inicio_idiomas = DestinoInicioIdioma::all()->unique('idioma');
        return view('page.termianos', compact('locale','destino','destino_inicio_idiomas'));
    }

    public function contact_us($locale){
        $locale = App::getLocale();
        $destino = Destino::all();
        $destino_inicio_idiomas = DestinoInicioIdioma::all()->unique('idioma');
        return view('page.contact', compact('locale','destino','destino_inicio_idiomas'));
    }
    public function partner($locale){
        $locale = App::getLocale();
        $destino = Destino::all();
        $destino_inicio_idiomas = DestinoInicioIdioma::all()->unique('idioma');
        return view('page.partner', compact('locale','destino','destino_inicio_idiomas'));
    }
    public function employment($locale){
        $locale = App::getLocale();
        $destino = Destino::all();
        $destino_inicio_idiomas = DestinoInicioIdioma::all()->unique('idioma');
        return view('page.employment', compact('locale','destino','destino_inicio_idiomas'));
    }

    public function parks_lima($locale){
        $locale = App::getLocale();
        $destino = Destino::all();
        $destino_inicio_idiomas = DestinoInicioIdioma::all()->unique('idioma');
        return view('page.parks', compact('locale','destino','destino_inicio_idiomas'));
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

        $destinos_grupos = DestinoGrupo::where('id', $id)->first();

        return redirect()->route('destination_path', [strtolower($idioma), $destinos_grupos->url]);

    }

    public function lang_tours($url, $idioma, $destino_url){

        Session::put('locale', $idioma);

        return redirect()->route('destination_tour_path', [strtolower($idioma), $destino_url, $url]);

    }

    public function send_email(Request $request){

        $from = 'hidalgochpnce@gmail.com';

        $text_grupo_title = $request->input('text_grupo_title');
        $date = $request->input('txt_date');
        $name = $request->input('txt_name');
        $email = $request->input('txt_email');
        $size = $request->input('slc_size');
        $tour = $request->input('slc_tour');
        $referencia = $request->input('slc_referencia');
        $comment = $request->input('txta_comment');

        try {
//            Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $name], function ($messaje) use ($email, $name) {
//                $messaje->to($email, $name)
//                    ->subject('Free Walking Tours Peru')
//                    /*->attach('ruta')*/
//                    ->from('info@freewalkingtoursperu.com', 'Free Walking Tours Peru');
//            });
            Mail::send(['html' => 'notifications.page.destinations-form-client'], [
                'text_grupo_title' => $text_grupo_title,
                'name' => $name,
                'email' => $email,
                'date' => $date,
                'size' => $size,
                'tour' => $tour,
                'referencia' => $referencia,
                'comment' => $comment
            ], function ($messaje) use ($email) {
                $messaje->to($email, 'Free Walking Tours Perú')
                    ->subject('Free Walking Tours Perú')
//                    ->cc($from2, 'GotoPeru')
                    /*->attach('ruta')*/
                    ->from('info@freewalkingtoursperu.com', 'Free Walking Tours Perú');
            });
            Mail::send(['html' => 'notifications.page.destinations-form-admin'], [
                'text_grupo_title' => $text_grupo_title,
                'name' => $name,
                'email' => $email,
                'date' => $date,
                'size' => $size,
                'tour' => $tour,
                'referencia' => $referencia,
                'comment' => $comment
            ], function ($messaje) use ($from) {
                $messaje->to($from, 'Free Walking Tours Perú')
                    ->subject('Free Walking Tours Perú')
//                    ->cc($from2, 'GotoPeru')
                    /*->attach('ruta')*/
                    ->from('info@freewalkingtoursperu.com', 'Free Walking Tours Perú');
            });
            return 'Thanks a lot for booking via FreeWalkingToursPeru! Our Official Operator: Inkan Milky Way Tours Lima is looking forward to seeing you soon! plz check your Confirmation Details on your Inbox or Spam Box, so hat you get to the Correct Meeting Point | If no reply plz show up at the Proper Meeting Point, we already got you in our system!';
        }
        catch (Exception $e){
            return $e;
        }

        return 'ok';

    }

}
