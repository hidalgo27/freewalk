<?php

namespace App\Http\Controllers\Admin;

use App\Destino;
use App\DestinoInicio;
use App\DestinoInicioIdioma;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Idioma;

class DestinoInicioController extends Controller
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
        $destinos_inicio = DestinoInicio::where('idioma',$idioma_principal->codigo)->get();

        $idiomas=Idioma::all();
        return view('admin.destino_inicio.index',compact('destinos_inicio','idiomas'));
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
        return view('admin.destino_inicio.create',compact('idiomas'));
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
        $detalle=$request->input('detalle');
        $imagen=$request->file('imagen');

        if($idioma=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un idioma.']);

        if($destino_id=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un destino.']);

        $destino_inicio=new DestinoInicio();
        $destino_inicio->titulo=$titulo;
        $destino_inicio->idioma=$idioma;
        $destino_inicio->detalle=$detalle;
        $destino_inicio->destino_id=$destino_id;
        $destino_inicio->estado=1;
        $destino_inicio->save();

        $destino_inicio_relacion=new DestinoInicioIdioma();
        $destino_inicio_relacion->destino_inicio_padre_id=$destino_inicio->id;
        $destino_inicio_relacion->destino_inicio_relacion_id=$destino_inicio->id;
        $destino_inicio_relacion->idioma=$idioma;
        $destino_inicio_relacion->save();
        if(!empty($imagen)){
                $filename ='imagen-'.$destino_inicio->id.'.'.$imagen->getClientOriginalExtension();
                $destino_inicio->imagen=$filename;
                $destino_inicio->save();
                Storage::disk('destino_inicio')->put($filename,  File::get($imagen));
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

        $oDestino_inicio=DestinoInicio::findOrFail($id);
        $oDestinos=Destino::where('idioma',$oDestino_inicio->idioma)->get();
        $idiomas=Idioma::get();
        return view('admin.destino_inicio.edit',compact('oDestinos','oDestino_inicio','idiomas'));
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
        $detalle=$request->input('detalle');
        $imagen=$request->file('imagen');
        $imagen_=$request->input('imagen_');
        if($idioma=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un idioma.']);

        if($destino_id=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un destino.']);

        $destino_inicio= DestinoInicio::findOrFail($id);
        $destino_inicio->titulo=$titulo;
        $destino_inicio->idioma=$idioma;
        $destino_inicio->detalle=$detalle;
        $destino_inicio->destino_id=$destino_id;
        $destino_inicio->estado=1;
        $destino_inicio->save();

        // borramos de la db la foto de portada que han sido eliminadas por el usuario
        if(!isset($imagen_)){
            $destino_inicio->imagen=NULL;
            $destino_inicio->save();
        }
        if(!empty($imagen)){
            $filename ='imagen-'.$destino_inicio->id.'.'.$imagen->getClientOriginalExtension();
            $destino_inicio->imagen=$filename;
            $destino_inicio->save();
            Storage::disk('destino_inicio')->put($filename,  File::get($imagen));
        }
        return redirect()->route('admin.destino-inicio.index.path')->with(['success'=>'Datos editados correctamente.']);
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


        $traducciones=DestinoInicioIdioma::where('destino_inicio_padre_id',$id)->where('destino_inicio_relacion_id','!=',$id)->get();
        foreach($traducciones as $traduccion){
            $oTourTemp=DestinoInicio::findOrFail($traduccion->destino_inicio_relacion_id);
            $oTourTemp->delete();
        }
        DestinoInicioIdioma::where('destino_inicio_padre_id',$id)->delete();
        $oDestino=DestinoInicio::findOrFail($id);
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
        $file = Storage::disk('destino_inicio')->get($filename);
        return response($file, 200);
    }
    public function index_idioma_create($id,$idioma,$arreglo)
    {
        //
        $destino_inicio = DestinoInicio::findOrFail($id);
        $idiomas=Idioma::where('estado','!=','1')->where('codigo',$idioma)->get();
        $destino=Destino::findOrFail($destino_inicio->destino_id);
        $idioma_=Idioma::where('codigo',$idioma)->get()->first();
        return view('admin.destino_inicio.create-idioma',compact('idiomas','idioma','idioma_','destino','arreglo','destino_inicio'));
    }
    public function index_idioma_store(Request $request,$id,$idioma,$arreglo)
    {
        $destino_id=$request->input('destino');
        $idioma=$request->input('idioma');
        $titulo=$request->input('titulo');
        $detalle=$request->input('detalle');
        $imagen=$request->file('imagen');

        if($idioma=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un idioma.']);

        if($destino_id=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un destino.']);

        $destino_inicio=new DestinoInicio();
        $destino_inicio->titulo=$titulo;
        $destino_inicio->idioma=$idioma;
        $destino_inicio->detalle=$detalle;
        $destino_inicio->destino_id=$destino_id;
        $destino_inicio->estado=1;
        $destino_inicio->save();

        $arreglo_=explode('-',$arreglo);
        foreach($arreglo_ as $arre){
            if(trim($arre)!=''){
                $a_=explode('_',$arre);
                $tour_relacion=new DestinoInicioIdioma();
                $tour_relacion->destino_inicio_padre_id=$a_[0];
                $tour_relacion->destino_inicio_relacion_id=$destino_inicio->id;
                $tour_relacion->idioma=$destino_inicio->idioma;
                $tour_relacion->save();
            }
        }
        if(!empty($imagen)){
                $filename ='imagen-'.$destino_inicio->id.'.'.$imagen->getClientOriginalExtension();
                $destino_inicio->imagen=$filename;
                $destino_inicio->save();
                Storage::disk('destino_inicio')->put($filename,  File::get($imagen));
        }
        return redirect()->route('admin.destino-inicio.index.path')->with(['success'=>'Datos guardados correctamente.']);
    }
    public function index_idioma_edit($id,$idioma,$arreglo)
    {
        //
        $oDestino_inicio = DestinoInicio::findOrFail($id);
        $idiomas=Idioma::where('estado','!=','1')->where('codigo',$idioma)->get();
        $destino=Destino::findOrFail($oDestino_inicio->destino_id);
        $idioma_=Idioma::where('codigo',$idioma)->get()->first();
        // dd($idioma_);
        return view('admin.destino_inicio.edit-idioma',compact('idiomas','idioma','idioma_','destino','arreglo','oDestino_inicio'));
    }
    public function index_idioma_update(Request $request,$id,$idioma,$arreglo)
    {
        //
        $destino_id=$request->input('destino');
        $idioma=$request->input('idioma');
        $titulo=$request->input('titulo');
        $detalle=$request->input('detalle');
        $imagen=$request->file('imagen');
        $imagen_=$request->input('imagen_');
        if($idioma=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un idioma.']);

        if($destino_id=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un destino.']);

        $destino_inicio= DestinoInicio::findOrFail($id);
        $destino_inicio->titulo=$titulo;
        $destino_inicio->idioma=$idioma;
        $destino_inicio->detalle=$detalle;
        $destino_inicio->destino_id=$destino_id;
        $destino_inicio->estado=1;
        $destino_inicio->save();

        // borramos de la db la foto de portada que han sido eliminadas por el usuario
        if(!isset($imagen_)){
            $destino_inicio->imagen=NULL;
            $destino_inicio->save();
        }
        if(!empty($imagen)){
            $filename ='imagen-'.$destino_inicio->id.'.'.$imagen->getClientOriginalExtension();
            $destino_inicio->imagen=$filename;
            $destino_inicio->save();
            Storage::disk('destino_inicio')->put($filename,  File::get($imagen));
        }
        return redirect()->route('admin.destino-inicio.index.path')->with(['success'=>'Datos editados correctamente.']);
        }
}
