<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function empresas(){
        return view('empresas');
    }
    public function blog(){
        return view('blog');
    }

    public function nosotros($nombre = null){

        $equipo = ['Juan','Pedro','Luis'];
    
        //return view('nosotros',['equipo'=>$equipo]);   //Version normal en php
         return view('nosotros',compact('equipo','nombre')); // Version simplificada de Blade
         return view('nosotros');
    }

    public function notas(){
        $notas = App\Nota::all();
         return view('notas',\compact('notas'));
    }

    public function detalle($id){
       $nota = App\Nota::findOrFail($id);
        return view('notas.detalle',\compact('nota'));
    }

    public function crear(Request $request){
           // return $request ->all();
            $request->validate([
                'nombre' => 'required',
                'descripcion' => 'required'

            ]);

            $notaNueva = new App\Nota;
            $notaNueva->nombre      =$request->nombre;
            $notaNueva->descripcion = $request->descripcion;

            $notaNueva->save();

            return back()->with('mensaje', 'Nota agregada'); // para traer devuelta 
     }

     public function editar($id){
        $nota = App\Nota::findOrFail($id);
         return view('notas.editar',\compact('nota'));
     }

     public function update(Request $request , $id){


        $notaUpdate = App\Nota::findOrFail($id);
        $notaUpdate ->nombre =$request->nombre;
        $notaUpdate ->descripcion =$request->descripcion;

        $notaUpdate->save();


        return back()->with('mensaje', 'Nota Actualizada'); // para traer devuelta 
        
     }
}
