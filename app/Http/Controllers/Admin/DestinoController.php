<?php

namespace App\Http\Controllers\Admin;

use App\Destino;
use App\DestinoGrupo;
use App\DestinoIdioma;
use App\DestinoInicio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Idioma;
use App\LugarRecojo;
use App\Tour;

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
        // $destinos = Destino::get();
        // return view('admin.destino.index',compact('destinos'));


        // $destinos=Destino::get();
        $idioma_principal=Idioma::where('estado','1')->first();
        $destinos = Destino::where('idioma',$idioma_principal->codigo)->get();
        $idiomas=Idioma::all();
        return view('admin.destino.index',compact('destinos','idiomas'));
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
        $destino_url=$request->input('url');
        $destino_idioma=$request->input('idioma');
        $eDestino=Destino::where('nombre',$destino_nombre)->where('idioma',$destino_idioma)->get();
        if($eDestino->count()==0){
            $oDestino=new Destino();
            $oDestino->orden=1;
            $oDestino->nombre=strtoupper($destino_nombre);
            $oDestino->url=$destino_url;
            $oDestino->idioma=$destino_idioma;
            $oDestino->estado=1;
            $oDestino->save();

            $destino_relacion=new DestinoIdioma();
            $destino_relacion->destino_padre_id=$oDestino->id;
            $destino_relacion->destino_relacion_id=$oDestino->id;
            $destino_relacion->idioma=$oDestino->idioma;
            $destino_relacion->save();
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
        $destino_url=$request->input('url');
        $destino_idioma=$request->input('idioma');
        $oDestino=Destino::findOrFail($destino_id);
        $oDestino->nombre=strtoupper($destino_nombre);
        $oDestino->idioma=$destino_idioma;
        $oDestino->url=$destino_url;
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
        $existeDestinoInicio=DestinoInicio::where('destino_id',$id)->get();
        if($existeDestinoInicio->count()>0){
            return response()->json([
                'codigo' => '2',
                'mensaje' => 'El destino esta siendo usado en registros de destino inicio, primero borre los registros asociados.'
            ]);
        }
        $existeDestinoGrupo=DestinoGrupo::where('destino_id',$id)->get();
        if($existeDestinoGrupo->count()>0){
            return response()->json([
                'codigo' => '2',
                'mensaje' => 'El destino esta siendo usado en registros de destino grupo, primero borre los registros asociados.'
            ]);
        }
        $existeLugarRecojo=LugarRecojo::where('destino_id',$id)->get();
        if($existeLugarRecojo->count()>0){
            return response()->json([
                'codigo' => '2',
                'mensaje' => 'El destino esta siendo usado en registros de lugares de recojo, primero borre los registros asociados.'
            ]);
        }

        $existeTour=Tour::where('destino_id',$id)->get();
        if($existeTour->count()>0){
            return response()->json([
                'codigo' => '2',
                'mensaje' => 'El destino esta siendo usado en registros de tours, primero borre los registros asociados.'
            ]);
        }
        //-- procedemos a borrar
        $traducciones= DestinoIdioma::where('destino_padre_id',$id)->where('destino_relacion_id','!=',$id)->get();
        foreach($traducciones as $traduccion){
            $oTourTemp=Destino::findOrFail($traduccion->destino_relacion_id);
            $oTourTemp->delete();
        }
        DestinoIdioma::where('destino_padre_id',$id)->delete();

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
    public function cambiar_estado(Request $request)
    {

        $id=$request->input('id');
        $estado=$request->input('estado');
        $temp=Destino::findOrFail($id);
        $temp->estado=$estado;
        $temp->save();
    }

    public function ordenar(Request $request)
    {
        $orden_id=$request->input('orden_id');
        $orden=$request->input('orden');
        if($orden_id){
            foreach($orden_id as $key => $id){
                $temp1=Destino::findOrFail($id);
                $temp1->orden=$orden[$key];
                $temp1->save();
            }
        }
        return redirect()->route('admin.destino.index.path')->with(['success'=>'Datos guardados correctamente.']);
    }

    public function mostrar_destinos(Request $request){
        $idioma=$request->idioma;
        if($request->ajax()){
            $destinos =Destino::where('idioma',$idioma)->get();
            $data = view('admin.destino.mostrar-destinos-ajax',compact('destinos'))->render();
            return \Response::json(['options'=>$data]);
        }
    }
    public function index_idioma_create($id,$idioma,$arreglo)
    {
        //
        $destino =Destino::findOrFail($id);
        $idiomas=Idioma::where('estado','!=','1')->where('codigo',$idioma)->get();
        // $destino=Destino::findOrFail($destino->destino_id);
        $idioma_=Idioma::where('codigo',$idioma)->get()->first();
        return view('admin.destino.create-idioma',compact('idiomas','idioma','idioma_','destino','arreglo'));
    }
    public function index_idioma_store(Request $request,$id,$idioma,$arreglo)
    {
        $destino_nombre=$request->input('destino');
        $destino_url=$request->input('url');
        $destino_idioma=$request->input('idioma');
        $eDestino=Destino::where('nombre',$destino_nombre)->where('idioma',$destino_idioma)->get();
        if($eDestino->count()==0){
            $oDestino=new Destino();
            $oDestino->orden=1;
            $oDestino->nombre=strtoupper($destino_nombre);
            $oDestino->idioma=$destino_idioma;
            $oDestino->url=$destino_url;
            $oDestino->estado=1;
            $oDestino->save();

            $arreglo_=explode('-',$arreglo);
            foreach($arreglo_ as $arre){
                if(trim($arre)!=''){
                    $a_=explode('_',$arre);
                    // $tour_relacion=new DestinoIdioma();
                    // $tour_relacion->destino_padre_id=$oDestino->id;
                    // $tour_relacion->destino_relacion_id=$a_[0];
                    // $tour_relacion->idioma=$a_[1];
                    // $tour_relacion->save();
                    $traduccion=new DestinoIdioma();
                    $traduccion->destino_padre_id=$a_[0];
                    $traduccion->destino_relacion_id=$oDestino->id;
                    $traduccion->idioma=$oDestino->idioma;
                    $traduccion->save();
                }
            }
            $destino_relacion=new DestinoIdioma();
            $destino_relacion->destino_padre_id=$oDestino->id;
            $destino_relacion->destino_relacion_id=$oDestino->id;
            $destino_relacion->idioma=$oDestino->idioma;
            $destino_relacion->save();
            // return redirect()->back()->with(['success'=>'Datos guardados correctamente.']);
            return redirect()->route('admin.destino.index.path')->with(['success'=>'Datos guardados correctamente.']);
        }
        else{
            return redirect()->back()->withInput($request->all())->with(['warning'=>'El destino ya existe.']);
        }
    }
    public function index_idioma_edit($id,$idioma,$arreglo)
    {
        //
        // $oLugar_recojo = LugarRecojo::findOrFail($id);
        $idiomas=Idioma::where('estado','!=','1')->where('codigo',$idioma)->get();
        $destino=Destino::findOrFail($id);
        $idioma_=Idioma::where('codigo',$idioma)->get()->first();
        // dd($idioma_);
        return view('admin.destino.edit-idioma',compact('idiomas','idioma','idioma_','destino','arreglo'));
    }
    public function index_idioma_update(Request $request,$id,$idioma,$arreglo)
    {
        //

        $destino_id=$request->input('id');
        $destino_nombre=$request->input('destino');
        $destino_url=$request->input('url');
        $destino_idioma=$request->input('idioma');
        $oDestino=Destino::findOrFail($destino_id);
        $oDestino->nombre=strtoupper($destino_nombre);
        $oDestino->idioma=$destino_idioma;
        $oDestino->url=$destino_url;
        $oDestino->estado=1;
        $oDestino->save();
        return redirect()->route('admin.destino.index.path')->with(['success'=>'Datos editados correctamente.']);
    }
}
