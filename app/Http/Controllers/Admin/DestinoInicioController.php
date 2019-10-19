<?php

namespace App\Http\Controllers\Admin;

use App\Destino;
use App\DestinoInicio;
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

        $destinos_inicio = DestinoInicio::get();
        return view('admin.destino_inicio.index',compact('destinos_inicio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $idiomas=Idioma::get();
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
}
