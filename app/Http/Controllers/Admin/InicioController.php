<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Idioma;
use App\Inicio;
use App\InicioIdioma;
use App\InicioImagen;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $idioma_principal=Idioma::where('estado','1')->first();
        $inicio =Inicio::where('idioma',$idioma_principal->codigo)->get();
        $idiomas=Idioma::all();
        return view('admin.inicio.index',compact('inicio','idiomas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $idiomas=Idioma::where('estado','1')->get();
        return view('admin.inicio.create',compact('idiomas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $idioma=$request->input('idioma');
        $url=$request->input('url');
        $titulo=$request->input('titulo');
        $descripcion=$request->input('descripcion');
        $banner_imagen=$request->file('banner_imagen');
        $banner_imagen_mobile=$request->file('banner_imagen_mobile');

        if($idioma=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un idioma.']);

        if(strlen(trim($descripcion))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese una descripcion.']);

        $inicio=new Inicio();
        $inicio->url=$url;
        $inicio->titulo=$titulo;
        $inicio->descripcion=$descripcion;
        $inicio->idioma=$idioma;
        $inicio->estado=1;
        $inicio->save();

        $inicio_idioma=new InicioIdioma();
        $inicio_idioma->inicio_padre_id=$inicio->id;
        $inicio_idioma->inicio_relacion_id=$inicio->id;
        $inicio_idioma->idioma=$idioma;
        $inicio_idioma->save();

        if(!empty($banner_imagen)){
            foreach($banner_imagen as $banner_imagen_){
                $filename ='foto-b-'.$inicio->id.'.'.$banner_imagen_->getClientOriginalExtension();
                $imagen=new InicioImagen();
                $imagen->titulo='';
                $imagen->imagen=$filename;
                $imagen->estado=0; //-- numero para banner
                $imagen->inicio_id=$inicio->id;
                $imagen->save();
                Storage::disk('inicio')->put($filename,  File::get($banner_imagen_));
            }
        }
        if(!empty($banner_imagen_mobile)){
            foreach($banner_imagen_mobile as $banner_imagen_){
                $filename ='foto-b-'.$inicio->id.'.'.$banner_imagen_->getClientOriginalExtension();
                $imagen=new InicioImagen();
                $imagen->titulo='';
                $imagen->imagen=$filename;
                $imagen->estado=2; //-- numero para banner mobile
                $imagen->inicio_id=$inicio->id;
                $imagen->save();
                Storage::disk('inicio')->put($filename,  File::get($banner_imagen_));
            }
        }
        return redirect()->back()->with(['success'=>'Datos guardados correctamente.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $inicio_relacionados=InicioIdioma::where('inicio_padre_id',$id)->where('inicio_relacion_id','!=',$id)->get();
        foreach($inicio_relacionados as $inicio_relacionado){
            $oInicioTemp=Inicio::findOrFail($inicio_relacionado->inicio_relacion_id);
            $oInicioTemp->delete();
            InicioImagen::where('inicio_id',$inicio_relacionado->inicio_relacion_id)->delete();
        }
        InicioIdioma::where('inicio_padre_id',$id)->delete();
        $oInicio=Inicio::findOrFail($id);
        $rpt=$oInicio->delete();
        if($rpt==1){
            InicioImagen::where('inicio_id',$id)->delete();
            return response()->json([
                'codigo' => '1',
                'mensaje' => 'Datos borrados correctamente.'
            ]);
        }else{
            return response()->json([
                'codigo' => '0',
                'mensaje' => 'Error al borrar los datos.'
            ]);
        }
    }
    public function get_imagen($filename){
        $file = Storage::disk('inicio')->get($filename);
        return response($file, 200);
    }
    public function index_idioma_create($id,$idioma,$arreglo)
    {
        //
        $inicio = Inicio::findOrFail($id);
        $idiomas=Idioma::where('estado','!=','1')->where('codigo',$idioma)->get();
        $idioma_=Idioma::where('codigo',$idioma)->get()->first();
        // dd($idioma_);
        return view('admin.inicio.create-idioma',compact('idiomas','idioma','idioma_','arreglo','inicio'));
    }
    public function index_idioma_store(Request $request,$id,$idioma,$arreglo)
    {
        $idioma=$request->input('idioma');
        $url=$request->input('url');
        $titulo=$request->input('titulo');
        $descripcion=$request->input('descripcion');
        $banner_imagen=$request->file('banner_imagen');
        $banner_imagen_mobile=$request->file('banner_imagen_mobile');

        if($idioma=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un idioma.']);

        if(strlen(trim($descripcion))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese una descripcion.']);

        $inicio=new Inicio();
        $inicio->url=$url;
        $inicio->titulo=$titulo;
        $inicio->descripcion=$descripcion;
        $inicio->idioma=$idioma;
        $inicio->estado=1;
        $inicio->save();
        $arreglo_=explode('-',$arreglo);
        foreach($arreglo_ as $arre){
            if(trim($arre)!=''){
                $a_=explode('_',$arre);
                // $tour_relacion=new InicioIdioma();
                // $tour_relacion->inicio_padre_id=$inicio->id;
                // $tour_relacion->inicio_relacion_id=$a_[0];
                // $tour_relacion->idioma=$a_[1];
                // $tour_relacion->save();

                $tour_relacion=new InicioIdioma();
                $tour_relacion->inicio_padre_id=$a_[0];
                $tour_relacion->inicio_relacion_id=$inicio->id;
                $tour_relacion->idioma=$inicio->idioma;
                $tour_relacion->save();
            }
        }
        if(!empty($banner_imagen)){
            foreach($banner_imagen as $banner_imagen_){
                $filename ='foto-b-'.$inicio->id.'.'.$banner_imagen_->getClientOriginalExtension();
                $imagen=new InicioImagen();
                $imagen->titulo='';
                $imagen->imagen=$filename;
                $imagen->estado=0; //-- numero para banner
                $imagen->inicio_id=$inicio->id;
                $imagen->save();
                Storage::disk('inicio')->put($filename,  File::get($banner_imagen_));
            }
        }
        // banner mobile
        if(!empty($banner_imagen_mobile)){
            foreach($banner_imagen_mobile as $banner_imagen_){
                $filename ='foto-b-'.$inicio->id.'.'.$banner_imagen_->getClientOriginalExtension();
                $imagen=new InicioImagen();
                $imagen->titulo='';
                $imagen->imagen=$filename;
                $imagen->estado=2; //-- numero para banner
                $imagen->inicio_id=$inicio->id;
                $imagen->save();
                Storage::disk('inicio')->put($filename,  File::get($banner_imagen_));
            }
        }
        return redirect()->route('admin.inicio.index.path')->with(['success'=>'Datos guardados correctamente.']);
    }
    public function index_idioma_edit($id,$idioma,$arreglo)
    {
        //
        $inicio = Inicio::findOrFail($id);
        $idiomas=Idioma::where('estado','!=','1')->where('codigo',$idioma)->get();
        $idioma_=Idioma::where('codigo',$inicio->idioma)->get()->first();
        // dd($idioma_);
        return view('admin.inicio.edit-idioma',compact('idiomas','idioma','idioma_','arreglo','inicio'));
    }
    public function index_idioma_update(Request $request,$id,$idioma,$arreglo)
    {
        //
        $idioma=$request->input('idioma');
        $url=$request->input('url');
        $titulo=$request->input('titulo');
        $descripcion=$request->input('descripcion');
        $banner_imagen=$request->file('banner_imagen');
        $banner_imagen_=$request->input('banner_imagen_');
        $banner_imagen_mobile=$request->file('banner_imagen_mobile');
        $banner_imagen_mobile_=$request->input('banner_imagen_mobile_');
        if($idioma=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un idioma.']);

        if(strlen(trim($descripcion))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese una descripcion.']);

        $inicio= Inicio::findOrFail($id);
        $inicio->url=$url;
        $inicio->titulo=$titulo;
        $inicio->descripcion=$descripcion;
        // $inicio->idioma=$idioma;
        $inicio->estado=1;
        $inicio->save();
        // $arreglo_=explode('-',$arreglo);
        // foreach($arreglo_ as $arre){
        //     if(trim($arre)!=''){
        //         $a_=explode('_',$arre);
        //         // $tour_relacion=new InicioIdioma();
        //         // $tour_relacion->inicio_padre_id=$inicio->id;
        //         // $tour_relacion->inicio_relacion_id=$a_[0];
        //         // $tour_relacion->idioma=$a_[1];
        //         // $tour_relacion->save();

        //         $tour_relacion=new InicioIdioma();
        //         $tour_relacion->inicio_padre_id=$a_[0];
        //         $tour_relacion->inicio_relacion_id=$inicio->id;
        //         $tour_relacion->idioma=$inicio->idioma;
        //         $tour_relacion->save();
        //     }
        // }
        // borramos de la db las imagenes banner que han sido eliminadas por el usuario
        if(count((array)$banner_imagen_)>0){
            $fotos_existentes=InicioImagen::where('inicio_id',$inicio->id)->where('estado','0')->get();
            foreach ($fotos_existentes as $value) {
                # code...
                if(!in_array($value->id,$banner_imagen_)){
                    InicioImagen::find($value->id)->delete();
                }
            }
        }
        else{
            InicioImagen::where('inicio_id',$inicio->id)->where('estado','0')->delete();
         }
        if(!empty($banner_imagen)){
            foreach($banner_imagen as $banner_image){
                $imagen = new InicioImagen();
                $imagen->titulo='';
                $imagen->imagen='';
                $imagen->estado=0; //-- numero para banner
                $imagen->inicio_id=$inicio->id;
                $imagen->save();
                $filename ='foto-b-'.$imagen->id.'.'.$banner_image->getClientOriginalExtension();
                $imagen->imagen=$filename;
                $imagen->save();
                Storage::disk('inicio')->put($filename,  File::get($banner_image));
            }
        }
        // borramos de la db las imagenes banner(Mobile que han sido eliminadas por el usuario
        if(count((array)$banner_imagen_mobile_)>0){
            $fotos_existentes=InicioImagen::where('inicio_id',$inicio->id)->where('estado','2')->get();
            foreach ($fotos_existentes as $value) {
                # code...
                if(!in_array($value->id,$banner_imagen_mobile_)){
                    InicioImagen::find($value->id)->delete();
                }
            }
        }
        else{
            InicioImagen::where('inicio_id',$inicio->id)->where('estado','2')->delete();
         }
        if(!empty($banner_imagen_mobile)){
            foreach($banner_imagen_mobile as $banner_image){
                $imagen = new InicioImagen();
                $imagen->titulo='';
                $imagen->imagen='';
                $imagen->estado=2; //-- numero para banner mobile
                $imagen->inicio_id=$inicio->id;
                $imagen->save();
                $filename ='foto-b-'.$imagen->id.'.'.$banner_image->getClientOriginalExtension();
                $imagen->imagen=$filename;
                $imagen->save();
                Storage::disk('inicio')->put($filename,  File::get($banner_image));
            }
        }
        return redirect()->route('admin.inicio.index.path')->with(['success'=>'Datos editados correctamente.']);

    }
}
