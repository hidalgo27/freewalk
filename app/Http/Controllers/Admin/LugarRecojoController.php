<?php

namespace App\Http\Controllers\Admin;

use App\Destino;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LugarRecojo;
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
        $lugar_recojo = LugarRecojo::get();
        return view('admin.lugar_recojo.index',compact('lugar_recojo','destinos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.lugar_recojo.create');
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

        if(!empty($imagen)){
                $filename ='imagen-'.$lugar_recojo->id.'.'.$imagen->getClientOriginalExtension();
                $lugar_recojo->referencia_imagen=$filename;
                $lugar_recojo->save();
                Storage::disk('lugar_recojo')->put($filename,  File::get($imagen));
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
        return view('admin.lugar_recojo.edit',compact('oDestinos','oLugar_recojo'));
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
}
