<?php

namespace App\Http\Controllers\Admin;

use App\Destino;
use App\DestinoIdioma;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Idioma;
use App\LugarRecojo;
use App\LugarRecojoIdioma;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class LugarRecojoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $destinos=Destino::get();
        $idioma_principal=Idioma::where('estado','1')->first();
        $lugar_recojo = LugarRecojo::where('idioma',$idioma_principal->codigo)->get();
        $idiomas=Idioma::all();
        return view('admin.lugar_recojo.index',compact('lugar_recojo','destinos','idiomas'));
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
        return view('admin.lugar_recojo.create',compact('idiomas'));
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
        $destino_id=$request->input('destino');
        $idioma=$request->input('idioma');
        $titulo=$request->input('titulo');
        $frame=$request->input('frame');
        $referencia=$request->input('referencia');
        $imagen=$request->file('referencia_imagen');
        $imagen_mapa=$request->file('referencia_imagen_mapa');

        if($idioma=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un idioma.']);

        if($destino_id=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un destino.']);

        if(strlen(trim($frame))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese el frame de GoogleMaps.']);

        if(strlen(trim($referencia))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese la referencia.']);

        $lugar_recojo=new LugarRecojo();
        $lugar_recojo->titulo=$titulo;
        $lugar_recojo->idioma=$idioma;
        $lugar_recojo->iframe=$frame;
        $lugar_recojo->referencia=$referencia;
        $lugar_recojo->referencia_imagen='';
        $lugar_recojo->imagen='';
        $lugar_recojo->lat='';
        $lugar_recojo->lon='';
        $lugar_recojo->destino_id=$destino_id;
        $lugar_recojo->estado=1;
        $lugar_recojo->save();

        $lugar_recojo_idioma=new LugarRecojoIdioma();
        $lugar_recojo_idioma->lugar_recojo_padre_id=$lugar_recojo->id;
        $lugar_recojo_idioma->lugar_recojo_relacion_id=$lugar_recojo->id;
        $lugar_recojo_idioma->idioma=$idioma;
        $lugar_recojo_idioma->save();
        if(!empty($imagen)){
                $filename ='imagen-'.$lugar_recojo->id.'.'.$imagen->getClientOriginalExtension();
                $lugar_recojo->referencia_imagen=$filename;
                $lugar_recojo->save();
                Storage::disk('lugar_recojo')->put($filename,  File::get($imagen));
        }
        if(!empty($imagen_mapa)){
            $filename ='imagen-mapa-'.$lugar_recojo->id.'.'.$imagen_mapa->getClientOriginalExtension();
            $lugar_recojo->referencia_imagen_mapa=$filename;
            $lugar_recojo->save();
            Storage::disk('lugar_recojo')->put($filename,  File::get($imagen_mapa));
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


        $oLugar_recojo=LugarRecojo::findOrFail($id);
        $oDestinos=Destino::where('idioma',$oLugar_recojo->idioma)->get();
        $idiomas=Idioma::get();
        return view('admin.lugar_recojo.edit',compact('oDestinos','oLugar_recojo','idiomas'));
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
        $destino_id=$request->input('destino');
        $idioma=$request->input('idioma');
        $titulo=$request->input('titulo');
        $frame=$request->input('frame');
        $referencia=$request->input('referencia');
        $imagen=$request->file('referencia_imagen');
        $imagen_=$request->input('referencia_imagen_');

        if($idioma=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un idioma.']);

        if($destino_id=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un destino.']);

        if(strlen(trim($frame))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese el frame de GoogleMaps.']);

        if(strlen(trim($referencia))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese la referencia.']);

        $lugar_recojo= LugarRecojo::findOrFail($id);
        $lugar_recojo->titulo=$titulo;
        $lugar_recojo->idioma=$idioma;
        $lugar_recojo->iframe=$frame;
        $lugar_recojo->referencia=$referencia;
        $lugar_recojo->destino_id=$destino_id;
        $lugar_recojo->estado=1;
        $lugar_recojo->save();


        // borramos de la db la foto de portada que han sido eliminadas por el usuario
        if(!isset($imagen_)){
            $lugar_recojo->referencia_imagen='';
            $lugar_recojo->save();
        }
        if(!empty($imagen)){
            $filename ='imagen-'.$lugar_recojo->id.'.'.$imagen->getClientOriginalExtension();
            $lugar_recojo->referencia_imagen=$filename;
            $lugar_recojo->save();
            Storage::disk('lugar_recojo')->put($filename,  File::get($imagen));
        }
        return redirect()->route('admin.lugar_recojo.index.path')->with(['success'=>'Datos editados correctamente.']);

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

        $traducciones= LugarRecojoIdioma::where('lugar_recojo_padre_id',$id)->where('lugar_recojo_relacion_id','!=',$id)->get();
        foreach($traducciones as $traduccion){
            $oTourTemp=LugarRecojo::findOrFail($traduccion->lugar_recojo_relacion_id);
            $oTourTemp->delete();
        }
        LugarRecojoIdioma::where('lugar_recojo_padre_id',$id)->delete();

        $oDestino=LugarRecojo::findOrFail($id);
        $rpt=$oDestino->delete();
        if($rpt==1){
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
        $file = Storage::disk('lugar_recojo')->get($filename);
        return response($file, 200);
    }
    public function mostrar_lugar_recojo(Request $request){
        $idioma=$request->idioma;
        $destino=$request->destino;
        if($request->ajax()){
            $lugar_recojo =LugarRecojo::where('idioma',$idioma)->where('destino_id',$destino)->get();
            $data = view('admin.lugar_recojo.mostrar-lugar-recojo-ajax',compact('lugar_recojo'))->render();
            return \Response::json(['options'=>$data]);
        }
    }
    public function index_idioma_create($id,$idioma,$arreglo)
    {
        //

        $lugar_recojo = LugarRecojo::findOrFail($id);
        $destino_id=$lugar_recojo->destino_id;
        $idiomas=Idioma::where('estado','!=','1')->where('codigo',$idioma)->get();
        $destino_idioma=DestinoIdioma::where('destino_padre_id',$destino_id)->where('idioma',$idioma)->get()->first();
        if(!$destino_idioma){
            return redirect()->route('admin.lugar_recojo.index.path')->with(['warning'=>'No tenemos el destino para el idioma:"'.$idioma.'".']);
        }
        $destino=Destino::findOrFail($destino_idioma->destino_relacion_id);
        $idioma_=Idioma::where('codigo',$idioma)->get()->first();
        return view('admin.lugar_recojo.create-idioma',compact('idiomas','idioma','idioma_','destino','arreglo','lugar_recojo'));
    }
    public function index_idioma_store(Request $request,$id,$idioma,$arreglo)
    {
        $destino_id=$request->input('destino');
        $idioma=$request->input('idioma');
        $titulo=$request->input('titulo');
        $frame=$request->input('frame');
        $referencia=$request->input('referencia');
        $imagen=$request->file('referencia_imagen');
        $imagen_mapa=$request->file('referencia_imagen_mapa');

        if($idioma=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un idioma.']);

        if($destino_id=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un destino.']);

        if(strlen(trim($frame))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese el frame de GoogleMaps.']);

        if(strlen(trim($referencia))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese la referencia.']);

        $lugar_recojo=new LugarRecojo();
        $lugar_recojo->titulo=$titulo;
        $lugar_recojo->idioma=$idioma;
        $lugar_recojo->iframe=$frame;
        $lugar_recojo->referencia=$referencia;
        $lugar_recojo->referencia_imagen='';
        $lugar_recojo->imagen='';
        $lugar_recojo->lat='';
        $lugar_recojo->lon='';
        $lugar_recojo->destino_id=$destino_id;
        $lugar_recojo->estado=1;
        $lugar_recojo->save();

        $arreglo_=explode('-',$arreglo);
        foreach($arreglo_ as $arre){
            if(trim($arre)!=''){
                $a_=explode('_',$arre);
                $traduccion=new LugarRecojoIdioma();
                $traduccion->lugar_recojo_padre_id=$a_[0];
                $traduccion->lugar_recojo_relacion_id=$lugar_recojo->id;
                $traduccion->idioma=$lugar_recojo->idioma;
                $traduccion->save();
            }
        }
        if(!empty($imagen)){
                $filename ='imagen-'.$lugar_recojo->id.'.'.$imagen->getClientOriginalExtension();
                $lugar_recojo->referencia_imagen=$filename;
                $lugar_recojo->save();
                Storage::disk('lugar_recojo')->put($filename,  File::get($imagen));
        }
        if(!empty($imagen_mapa)){
            $filename ='imagen-mapa-'.$lugar_recojo->id.'.'.$imagen_mapa->getClientOriginalExtension();
            $lugar_recojo->referencia_imagen_mapa=$filename;
            $lugar_recojo->save();
            Storage::disk('lugar_recojo')->put($filename,  File::get($imagen_mapa));
    }
        return redirect()->route('admin.lugar_recojo.index.path')->with(['success'=>'Datos guardados correctamente.']);
    }
    public function index_idioma_edit($id,$idioma,$arreglo)
    {
        //
        $oLugar_recojo = LugarRecojo::findOrFail($id);
        $idiomas=Idioma::where('estado','!=','1')->where('codigo',$idioma)->get();
        $destino=Destino::findOrFail($oLugar_recojo->destino_id);
        $idioma_=Idioma::where('codigo',$idioma)->get()->first();
        // dd($idioma_);
        return view('admin.lugar_recojo.edit-idioma',compact('idiomas','idioma','idioma_','destino','arreglo','oLugar_recojo'));
    }
    public function index_idioma_update(Request $request,$id,$idioma,$arreglo)
    {
        //
        $destino_id=$request->input('destino');
        $idioma=$request->input('idioma');
        $titulo=$request->input('titulo');
        $frame=$request->input('frame');
        $referencia=$request->input('referencia');
        $imagen=$request->file('referencia_imagen');
        $imagen_=$request->input('referencia_imagen_');
        $imagen_mapa=$request->file('referencia_imagen_mapa');
        $imagen_mapa_=$request->input('referencia_imagen_mapa_');

        if($idioma=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un idioma.']);

        if($destino_id=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un destino.']);

        if(strlen(trim($frame))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese el frame de GoogleMaps.']);

        if(strlen(trim($referencia))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese la referencia.']);

        $lugar_recojo= LugarRecojo::findOrFail($id);
        $lugar_recojo->titulo=$titulo;
        $lugar_recojo->idioma=$idioma;
        $lugar_recojo->iframe=$frame;
        $lugar_recojo->referencia=$referencia;
        $lugar_recojo->destino_id=$destino_id;
        $lugar_recojo->estado=1;
        $lugar_recojo->save();


        // borramos de la db la foto de portada que han sido eliminadas por el usuario
        if(!isset($imagen_)){
            $lugar_recojo->referencia_imagen='';
            $lugar_recojo->save();
        }
        if(!empty($imagen)){
            $filename ='imagen-'.$lugar_recojo->id.'.'.$imagen->getClientOriginalExtension();
            $lugar_recojo->referencia_imagen=$filename;
            $lugar_recojo->save();
            Storage::disk('lugar_recojo')->put($filename,  File::get($imagen));
        }
        // borramos de la db la foto de portada que han sido eliminadas por el usuario
        if(!isset($imagen_mapa_)){
            $lugar_recojo->referencia_imagen_mapa='';
            $lugar_recojo->save();
        }
        if(!empty($imagen_mapa)){
            $filename ='imagen-mapa-'.$lugar_recojo->id.'.'.$imagen_mapa->getClientOriginalExtension();
            $lugar_recojo->referencia_imagen_mapa=$filename;
            $lugar_recojo->save();
            Storage::disk('lugar_recojo')->put($filename,  File::get($imagen_mapa));
        }
        return redirect()->route('admin.lugar_recojo.index.path')->with(['success'=>'Datos editados correctamente.']);
    }
}
