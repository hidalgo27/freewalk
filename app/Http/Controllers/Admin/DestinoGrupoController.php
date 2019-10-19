<?php

namespace App\Http\Controllers\Admin;

use App\Destino;
use App\DestinoGrupo;
use App\DestinoGrupoImagen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Idioma;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class DestinoGrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $destinos_grupo = DestinoGrupo::get();
        $idiomas=Idioma::get();
        return view('admin.destino_grupo.index',compact('destinos_grupo','idiomas'));
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
        return view('admin.destino_grupo.create',compact('idiomas'));
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
        $descripcion=$request->input('descripcion');
        $detalle=$request->input('detalle');
        $banner_imagen=$request->file('banner_imagen');
        $que_porque=$request->input('que_porque');
        $que_porque_imagen=$request->file('que_porque_imagen');
        if($idioma=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un idioma.']);

        if($destino_id=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un destino.']);

        if(strlen(trim($descripcion))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese una descripcion.']);

        if(strlen(trim($detalle))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese un detalle.']);

        if(strlen(trim($que_porque))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese un contenido para que_porque.']);

        $destino_grupo=new DestinoGrupo();
        $destino_grupo->titulo=$titulo;
        $destino_grupo->descripcion=$descripcion;
        $destino_grupo->detalle=$detalle;
        $destino_grupo->que_porque=$que_porque;
        $destino_grupo->destino_id=$destino_id;
        $destino_grupo->idioma=$idioma;
        $destino_grupo->estado=1;
        $destino_grupo->save();

        if(!empty($banner_imagen)){
            foreach($banner_imagen as $banner_imagen_){
                $filename ='imagen-b-'.$destino_grupo->id.'.'.$banner_imagen_->getClientOriginalExtension();
                $imagen=new DestinoGrupoImagen();
                $imagen->titulo='';
                $imagen->descripcion='';
                $imagen->imagen=$filename;
                $imagen->estado=0; //-- numero para banner
                $imagen->destinos_grupo_id=$destino_grupo->id;
                $imagen->save();
                Storage::disk('destino_grupo')->put($filename,  File::get($banner_imagen_));
            }
        }
        if(!empty($que_porque_imagen)){
            foreach($que_porque_imagen as $banner_imagen_qp){
                $filename ='imagen-qp-'.$destino_grupo->id.'.'.$banner_imagen_qp->getClientOriginalExtension();
                $imagen=new DestinoGrupoImagen();
                $imagen->titulo='';
                $imagen->descripcion='';
                $imagen->imagen=$filename;
                $imagen->estado=2; //-- numero para banner
                $imagen->destinos_grupo_id=$destino_grupo->id;
                $imagen->save();
                Storage::disk('destino_grupo')->put($filename,  File::get($banner_imagen_qp));
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
        $oDestino_grupo=DestinoGrupo::findOrFail($id);
        $oDestinos=Destino::where('idioma',$oDestino_grupo->idioma)->get();
        $idiomas=Idioma::get();
        return view('admin.destino_grupo.edit',compact('oDestinos','oDestino_grupo','idiomas'));
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
        $descripcion=$request->input('descripcion');
        $detalle=$request->input('detalle');
        $banner_imagen=$request->file('banner_imagen');
        $banner_imagen_=$request->input('banner_imagen_');
        $que_porque=$request->input('que_porque');
        $que_porque_imagen=$request->file('que_porque_imagen');
        $que_porque_imagen_=$request->input('que_porque_imagen_');
        // dd($banner_imagen_);
        if($idioma=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un idioma.']);

        if($destino_id=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un destino.']);

        if(strlen(trim($descripcion))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese una descripcion.']);

        if(strlen(trim($detalle))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese un detalle.']);

        if(strlen(trim($que_porque))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese un contenido para que_porque.']);

        $destino_grupo=DestinoGrupo::findOrFail($id);
        $destino_grupo->titulo=$titulo;
        $destino_grupo->descripcion=$descripcion;
        $destino_grupo->detalle=$detalle;
        $destino_grupo->que_porque=$que_porque;
        $destino_grupo->idioma=$idioma;
        $destino_grupo->estado=1;
        $destino_grupo->save();
        // borramos de la db las imagenes banner que han sido eliminadas por el usuario
        if(count((array)$banner_imagen_)>0){
            $fotos_existentes=DestinoGrupoImagen::where('destinos_grupo_id',$destino_grupo->id)->where('estado','0')->get();
            foreach ($fotos_existentes as $value) {
                # code...
                if(!in_array($value->id,$banner_imagen_)){
                    DestinoGrupoImagen::find($value->id)->delete();
                }
            }
        }
        else{
            DestinoGrupoImagen::where('destinos_grupo_id',$destino_grupo->id)->where('estado','0')->delete();
         }
        if(!empty($banner_imagen)){
            foreach($banner_imagen as $banner_image){
                $imagen = new DestinoGrupoImagen();
                $imagen->titulo='';
                $imagen->descripcion='';
                $imagen->estado=0; //-- numero para banner
                $imagen->imagen='';
                $imagen->destinos_grupo_id=$destino_grupo->id;
                $imagen->save();

                $filename ='foto-b-'.$imagen->id.'.'.$banner_image->getClientOriginalExtension();
                $imagen->imagen=$filename;
                $imagen->save();
                Storage::disk('destino_grupo')->put($filename,  File::get($banner_image));
            }
        }
        // borramos de la db las imagenes banner que han sido eliminadas por el usuario
        if(count((array)$que_porque_imagen_)>0){
            $fotos_existentesqp=DestinoGrupoImagen::where('destinos_grupo_id',$destino_grupo->id)->where('estado','2')->get();
            foreach ($fotos_existentesqp as $value) {
                # code...
                if(!in_array($value->id,$que_porque_imagen_)){
                    DestinoGrupoImagen::find($value->id)->delete();
                }
            }
        }
        else{
            DestinoGrupoImagen::where('destinos_grupo_id',$destino_grupo->id)->where('estado','2')->delete();
         }
        if(!empty($que_porque_imagen)){
            foreach($que_porque_imagen as $que_porque_imagen1){
                $imagen = new DestinoGrupoImagen();
                $imagen->titulo='';
                $imagen->descripcion='';
                $imagen->estado=2; //-- numero para banner
                $imagen->imagen='';
                $imagen->destinos_grupo_id=$destino_grupo->id;
                $imagen->save();
                $filename ='foto-qp-'.$imagen->id.'.'.$que_porque_imagen1->getClientOriginalExtension();
                $imagen->imagen=$filename;
                $imagen->save();
                Storage::disk('destino_grupo')->put($filename,  File::get($que_porque_imagen1));
            }
        }
        return redirect()->route('admin.destino-grupo.index.path')->with(['success'=>'Datos editados correctamente.']);
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
        $oDestino=DestinoGrupo::findOrFail($id);
        $rpt=$oDestino->delete();
        if($rpt==1){
            DestinoGrupoImagen::where('destinos_grupo_id',$id)->delete();
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
        $file = Storage::disk('destino_grupo')->get($filename);
        return response($file, 200);
    }
    public function lugares_visitar($id)
    {
        //
        $oAtractivos=DestinoGrupoImagen::where('destinos_grupo_id',$id)->where('estado','1')->get();
        // dd($oAtractivos);
        // $oDestinosGrupo=DestinoGrupo::where('idioma',$oDestino_grupo->idioma)->get();
        $oDestino_grupo_id=$id;
        return view('admin.destino_grupo.atractivos',compact('oAtractivos','oDestino_grupo_id'));
    }
    public function lugares_visitar_store(Request $request)
    {
        //
        $titulo=$request->input('titulo');
        $atractivo_imagen=$request->file('atractivo_imagen');
        $id=$request->input('id');
        $filename ='foto-at-'.$id.'.'.$atractivo_imagen->getClientOriginalExtension();
        $imagen = new DestinoGrupoImagen();
        $imagen->titulo=$titulo;
        $imagen->descripcion='';
        $imagen->estado=1; //-- numero para banner
        $imagen->imagen=$filename;
        $imagen->destinos_grupo_id=$id;
        $imagen->save();
        Storage::disk('destino_grupo')->put($filename,  File::get($atractivo_imagen));
        return redirect()->route('admin.destino-grupo.lugares-visitar.path',$id)->with(['success'=>'Datos guardados correctamente.']);
    }
    public function lugares_visitar_destroy($id)
    {
        //
        $oDestinoGrupoImagen=DestinoGrupoImagen::findOrFail($id);
        $rpt=$oDestinoGrupoImagen->delete();
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
    public function atractivos_index($id)
    {
        //
        $destino_grupo=DestinoGrupo::findOrFail($id);
        $destinos_grupo_imagen =DestinoGrupoImagen::where('destinos_grupo_id',$id)->where('estado',3)->get();
        $idiomas=Idioma::get();
        return view('admin.destino_grupo.atractivos-index',compact('destinos_grupo_imagen','idiomas','destino_grupo'));
    }
    public function atractivos_create($id)
    {
        //
        $destino_grupo=DestinoGrupo::findOrFail($id);
        $idiomas=Idioma::get();
        return view('admin.destino_grupo.atractivos-create',compact('idiomas','destino_grupo'));
    }

    public function atractivos_store(Request $request, $id)
    {
        $atractivo_titulo=$request->input('atractivo_titulo');
        $atractivo_descripcion=$request->input('atractivo_descripcion');
        $atractivo_imagen=$request->file('atractivo_imagen');

        if(strlen(trim($atractivo_titulo))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese un titulo.']);
        if(strlen(trim($atractivo_descripcion))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese una descripcion.']);
            $destino_grupo_imagen=new DestinoGrupoImagen();
            $destino_grupo_imagen->titulo=$atractivo_titulo;
            $destino_grupo_imagen->descripcion=$atractivo_descripcion;
            $destino_grupo_imagen->imagen='';
            $destino_grupo_imagen->destinos_grupo_id=$id;
            $destino_grupo_imagen->estado=3;
            $destino_grupo_imagen->save();

            if(!empty($atractivo_imagen)){
                    $filename ='imagen-atra-'.$destino_grupo_imagen->id.'.'.$atractivo_imagen->getClientOriginalExtension();
                    $destino_grupo_imagen->imagen=$filename;
                    $destino_grupo_imagen->save();
                    Storage::disk('destino_grupo')->put($filename,  File::get($atractivo_imagen));
            }
            return redirect()->back()->with(['success'=>'Datos guardados correctamente.']);
    }
    public function atractivos_edit($destino_grupo_id,$id)
    {
        //
        $destino_grupo=DestinoGrupo::findOrFail($destino_grupo_id);
        $destino_grupo_imagen=DestinoGrupoImagen::findOrFail($id);
        return view('admin.destino_grupo.atractivos-edit',compact('destino_grupo','destino_grupo_imagen'));
    }
    public function atractivos_update(Request $request, $destino_grupo_id, $id)
    {
        $atractivo_titulo=$request->input('atractivo_titulo');
        $atractivo_descripcion=$request->input('atractivo_descripcion');
        $atractivo_imagen=$request->file('atractivo_imagen');
        $atractivo_imagen_=$request->input('atractivo_imagen_');

        if(strlen(trim($atractivo_titulo))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese un titulo.']);
        if(strlen(trim($atractivo_descripcion))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese una descripcion.']);

        $destino_grupo_imagen= DestinoGrupoImagen::findOrFail($id);
        $destino_grupo_imagen->titulo=$atractivo_titulo;
        $destino_grupo_imagen->descripcion=$atractivo_descripcion;
        $destino_grupo_imagen->save();

        // borramos de la db la foto de portada que han sido eliminadas por el usuario
        if(!isset($atractivo_imagen_)){
            $destino_grupo_imagen->imagen='';
            $destino_grupo_imagen->save();
        }
        if(!empty($atractivo_imagen)){
            $filename ='imagen-atra-'.$destino_grupo_imagen->id.'.'.$atractivo_imagen->getClientOriginalExtension();
            $destino_grupo_imagen->imagen=$filename;
            $destino_grupo_imagen->save();
            Storage::disk('destino_grupo')->put($filename,  File::get($atractivo_imagen));
        }

            return redirect()->route('admin.destino-grupo.atractivos.index.path',$destino_grupo_id)->with(['success'=>'Datos editados correctamente.']);
    }

    public function atractivos_destroy($destino_grupo_id,$id)
    {
        //
        $oDestinoGrupoImagen=DestinoGrupoImagen::findOrFail($id);
        $rpt=$oDestinoGrupoImagen->delete();
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
}
