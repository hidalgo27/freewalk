<?php

namespace App\Http\Controllers\Admin;

use App\Destino;
use App\DestinoGrupo;
use App\DestinoInicio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Idioma;
use App\LugarRecojo;
use App\Tour;

class IdiomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $idiomas = Idioma::get();
        return view('admin.idioma.index',compact('idiomas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.idioma.create');
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
        $codigo=$request->input('codigo');
        $nombre=$request->input('nombre');
        $principal=$request->input('principal');
        if($principal==1){
            $ePrincipal=Idioma::where('estado','1')->get()->count();
            if($ePrincipal>0){
                return redirect()->back()->withInput($request->all())->with(['warning'=>'Ya existe un idioma principal, cambie todo los idiomas a secundario para que pemita agregar un nuevo.']);
            }
        }
        $eDestino=Idioma::where('codigo',$codigo)->Orwhere('nombre',$nombre)->get();
        if($eDestino->count()==0){
            $oDestino=new Idioma();
            $oDestino->codigo=strtoupper($codigo);
            $oDestino->nombre=strtoupper($nombre);
            $oDestino->estado=$principal;
            $oDestino->save();
            $oDestino->save();
            return redirect()->back()->with(['success'=>'Datos guardados correctamente.']);
        }
        else{
            return redirect()->back()->withInput($request->all())->with(['warning'=>'El idioma ya existe.']);
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

        $oidioma=Idioma::findOrFail($id);
        return view('admin.idioma.edit',compact('oidioma'));
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
        $codigo=$request->input('codigo');
        $nombre=$request->input('nombre');
        $principal=$request->input('principal');
        $oIdioma=Idioma::findOrFail($id);

        if($principal==1){
            $ePrincipal=Idioma::where('estado','1')->where('codigo','!=',$oIdioma->codigo)->get()->count();
            if($ePrincipal>0){

                return redirect()->back()->withInput($request->all())->with(['warning'=>'Ya existe un idioma principal, cambie todo los idiomas a secundario para que pemita agregar un nuevo.']);
            }
        }
        $oIdioma->codigo=strtoupper($codigo);
        $oIdioma->nombre=strtoupper($nombre);
        $oIdioma->estado=$principal;
        $oIdioma->save();
        return redirect()->route('admin.idioma.index.path')->with(['success'=>'Datos guardados correctamente.']);
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

        $oIdioma=Idioma::findOrFail($id);
        // revisamos si hay destinos con este idioma
        $existeDestino=Destino::where('idioma',$oIdioma->codigo)->get();
        if($existeDestino->count()>0){
            return response()->json([
                'codigo' => '2',
                'mensaje' => 'El idioma esta siendo usado en registros de Destinos, primero borre los registros asociados.'
            ]);
        }

        // revisamos si hay destinos-inicio con este idioma
        $existeDestinoInicio=DestinoInicio::where('idioma',$oIdioma->codigo)->get();
        if($existeDestinoInicio->count()>0){
            return response()->json([
                'codigo' => '2',
                'mensaje' => 'El idioma esta siendo usado en registros de Destinos inicio, primero borre los registros asociados.'
            ]);
        }
        // revisamos si hay destinos-inicio con este idioma
        $existeDestinoGrupo=DestinoGrupo::where('idioma',$oIdioma->codigo)->get();
        if($existeDestinoGrupo->count()>0){
            return response()->json([
                'codigo' => '2',
                'mensaje' => 'El idioma esta siendo usado en registros de Destinos agrupados, primero borre los registros asociados.'
            ]);
        }
        $existeLugarRecojo=LugarRecojo::where('destino_id',$id)->get();
        if($existeLugarRecojo->count()>0){
            return response()->json([
                'codigo' => '2',
                'mensaje' => 'El destino esta siendo usado en registros de Lugar de recojo, primero borre los registros asociados.'
            ]);
        }
        // revisamos si hay destinos-inicio con este idioma
        $existeTour=Tour::where('idioma',$oIdioma->codigo)->get();
        if($existeTour->count()>0){
            return response()->json([
                'codigo' => '2',
                'mensaje' => 'El idioma esta siendo usado en registros de Tours, primero borre los registros asociados.'
            ]);
        }

        //-- procedemos a borrar
            $oIdioma=Idioma::findOrFail($id);
            $rpt=$oIdioma->delete();
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
