<?php

namespace App\Http\Controllers\Admin;

use App\Destino;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tour;
use App\TourImagen;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tours = Tour::get();
        return view('admin.tour.index',compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.tour.create');
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
        $itinerario=$request->input('itinerario');
        $banner_imagen=$request->file('banner_imagen');

        if($idioma=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un idioma.']);

        if($destino_id=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un destino.']);

        if(strlen(trim($descripcion))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese una descripcion.']);

        if(strlen(trim($itinerario))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese un itinerario.']);

        $tour=new Tour();
        $tour->titulo=$titulo;
        $tour->descripcion=$descripcion;
        $tour->itinerario=$itinerario;
        $tour->destino_id=$destino_id;
        $tour->idioma=$idioma;
        $tour->estado=1;
        $tour->save();

        if(!empty($banner_imagen)){
            foreach($banner_imagen as $banner_imagen_){
                $filename ='foto-b-'.$tour->id.'.'.$banner_imagen_->getClientOriginalExtension();
                $imagen=new TourImagen();
                $imagen->titulo='';
                $imagen->imagen=$filename;
                $imagen->estado=0; //-- numero para banner
                $imagen->tours_id=$tour->id;
                $imagen->save();
                Storage::disk('tours')->put($filename,  File::get($banner_imagen_));
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
        $oTour=Tour::findOrFail($id);
        $oDestinos=Destino::where('idioma',$oTour->idioma)->get();
        return view('admin.tour.edit',compact('oDestinos','oTour'));
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
        $itinerario=$request->input('itinerario');
        $banner_imagen=$request->file('banner_imagen');
        $banner_imagen_=$request->input('banner_imagen_');
        // dd($banner_imagen_);
        if($idioma=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un idioma.']);

        if($destino_id=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Escoja un destino.']);

        if(strlen(trim($descripcion))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese una descripcion.']);

        if(strlen(trim($itinerario))=='0')
            return redirect()->back()->withInput($request->all())->with(['warning'=>'Ingrese un itinerario.']);

        $tour=Tour::findOrFail($id);
        $tour->titulo=$titulo;
        $tour->descripcion=$descripcion;
        $tour->itinerario=$itinerario;
        $tour->idioma=$idioma;
        $tour->destino_id=$destino_id;
        $tour->estado=1;
        $tour->save();
        // borramos de la db las imagenes banner que han sido eliminadas por el usuario
        if(count((array)$banner_imagen_)>0){
            $fotos_existentes=TourImagen::where('tours_id',$tour->id)->where('estado','0')->get();
            foreach ($fotos_existentes as $value) {
                # code...
                if(!in_array($value->id,$banner_imagen_)){
                    TourImagen::find($value->id)->delete();
                }
            }
        }
        else{
            TourImagen::where('tours_id',$tour->id)->where('estado','0')->delete();
         }
        if(!empty($banner_imagen)){
            foreach($banner_imagen as $banner_image){
                $imagen = new TourImagen();
                $imagen->titulo='';
                $imagen->imagen='';
                $imagen->estado=0; //-- numero para banner
                $imagen->tours_id=$tour->id;
                $imagen->save();
                $filename ='foto-b-'.$imagen->id.'.'.$banner_image->getClientOriginalExtension();
                $imagen->imagen=$filename;
                $imagen->save();
                Storage::disk('tours')->put($filename,  File::get($banner_image));
            }
        }
        return redirect()->route('admin.tour.index.path')->with(['success'=>'Datos editados correctamente.']);
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
        $oTour=Tour::findOrFail($id);
        $rpt=$oTour->delete();
        if($rpt==1){
            TourImagen::where('tours_id',$id)->delete();
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
        $file = Storage::disk('tours')->get($filename);
        return response($file, 200);
    }

    public function galeria_index($id){
        //
        $oGaleria=TourImagen::where('tours_id',$id)->where('estado','1')->get();
        // dd($oAtractivos);
        // $oDestinosGrupo=DestinoGrupo::where('idioma',$oDestino_grupo->idioma)->get();
        $oTour_id=$id;
        return view('admin.tour.galeria',compact('oTour_id','oGaleria'));
    }
    public function galeria_store(Request $request)
    {
        //
        $titulo=$request->input('titulo');
        $atractivo_imagen=$request->file('galeria_imagen');
        $id=$request->input('id');
        $filename ='foto-g-'.$id.'.'.$atractivo_imagen->getClientOriginalExtension();
        $imagen = new TourImagen();
        $imagen->titulo=$titulo;
        $imagen->estado=1; //-- numero para banner
        $imagen->imagen=$filename;
        $imagen->tours_id=$id;
        $imagen->save();
        Storage::disk('tours')->put($filename,  File::get($atractivo_imagen));
        return redirect()->route('admin.tour.galeria.index.path',$id)->with(['success'=>'Datos guardados correctamente.']);
    }
    public function galeria_destroy($id)
    {
        //
        $oDestinoGrupoImagen=TourImagen::findOrFail($id);
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
