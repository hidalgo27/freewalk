<?php

namespace App\Http\Controllers\Admin;

use App\Destino;
use App\DestinoInicio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Idioma;

class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $destinos = Destino::get();
        return view('admin.destino.index',compact('destinos'));
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
        return view('admin.destino.create',compact('idiomas'));
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
        $destino_nombre=$request->input('destino');
        $destino_idioma=$request->input('idioma');
        $eDestino=Destino::where('nombre',$destino_nombre)->where('idioma',$destino_idioma)->get();
        if($eDestino->count()==0){
            $oDestino=new Destino();
            $oDestino->nombre=strtoupper($destino_nombre);
            $oDestino->idioma=$destino_idioma;
            $oDestino->estado=1;
            $oDestino->save();
            return redirect()->back()->with(['success'=>'Datos guardados correctamente.']);
        }
        else{
            return redirect()->back()->withInput($request->all())->with(['warning'=>'El destino ya existe.']);
        }
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
        $oDestino=Destino::findOrFail($id);
        $idiomas=Idioma::get();
        return view('admin.destino.edit',compact('oDestino','idiomas'));
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
        $destino_id=$request->input('id');
        $destino_nombre=$request->input('destino');
        $destino_idioma=$request->input('idioma');
        $oDestino=Destino::findOrFail($destino_id);
        $oDestino->nombre=strtoupper($destino_nombre);
        $oDestino->idioma=$destino_idioma;
        $oDestino->estado=1;
        $oDestino->save();
        return redirect()->back()->with(['success'=>'Datos guardados correctamente.']);
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
        // preguntamos si existe en otras tablas
        $existe=DestinoInicio::where('destino_id',$id)->get();
        if($existe->count()>0){
            return response()->json([
                'codigo' => '2',
                'mensaje' => 'El destino esta siendo usado en otros registros, primero borre los registros asociados.'
            ]);
        }
        else{//-- procedemos a borrar
            $oDestino=Destino::findOrFail($id);
            $rpt=$oDestino->delete();
            if($rpt==1){
                // return  1;
                return response()->json([
                    'codigo' => '1',
                    'mensaje' => 'Datos borrados correctamente.'
                ]);
            }else{
                return response()->json([
                    'codigo' => '0',
                    'mensaje' => 'Error al borrar los datos.'
                ]);
                // return 0;
            }
        }
    }
    public function mostrar_destinos(Request $request){
        $idioma=$request->idioma;
        if($request->ajax()){
            $destinos =Destino::where('idioma',$idioma)->get();
            $data = view('admin.destino.mostrar-destinos-ajax',compact('destinos'))->render();
            return \Response::json(['options'=>$data]);
        }
    }
}
