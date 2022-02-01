<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function inicio()
    {
        return view('inicio');
    }

    public function cholloPaginacion()
    {
        $cholloPag = Chollo::paginate(5);
        //utilizar pagination-bootstrap-4
        
        return view ('inicio', compact('paginacion'));
    }

    public function crear(Request $request)
    {
        $chollo_nuevo = new Chollo();

        $chollo_nuevo->titulo=$request->input_title;
        $chollo_nuevo->descripcion=$request->input_description;
        $chollo_nuevo->url=$request->input_url;
        $chollo_nuevo->categoria=$request->input_category;
        $chollo_nuevo->precio=$request->input_price_old;
        $chollo_nuevo->precio_descuento=$request->input_price_new;

        $chollo_nuevo->save();
        return back() -> with('mensaje', 'Chollo agregado exitósamente');
    }
    
    public function cargarChollos ()
    {
        $cargarChollos = Chollo::all();
        return view('inicio', compact('cargarChollos'));
    }
    public function cargarChollo($id)
    {
        $cargarChollo = Chollo::findOrFail($id);
        return view('producto', compact('cargarChollo'));
    }

    public function editar($id)
    {
        $editarChollo = Chollo::findOrFail($id);
        return view('form.editar', compact('editarChollo'));
    }
    
    public function actualizar(Request $request, $id) {
        $request -> validate([
            'input_title' => 'required',
            'input_description' => 'required',
            'input_url'=>'required',
            'input_category'=>'required',
            'input_price_old'=>'required',
            'input_price_new'=>'required'
        ]);
        $cholloActualizar = Chollo::findOrFail($id);

        $cholloActualizar -> titulo = $request -> input_title;
        $cholloActualizar -> descripcion = $request -> input_description;
        $cholloActualizar -> url = $request -> input_url;
        $cholloActualizar -> categoria = $request -> input_category;
        $cholloActualizar -> precio = $request -> input_price_old;
        $cholloActualizar -> precio_descuento = $request -> input_price_new;
      
        $cholloActualizar -> save();
      
        return back() -> with('mensaje', 'Nota actualizada');
      }
        
    public function nuevo()
    {
        return view('nuevo');
    }

    public function destacado()
    {
        return view('destacado');
    }

    public function producto()
    {
        return view('producto');
    }

    public function eliminar($id) {
        Chollo::destroy($id);
        /* $cholloEliminar = Chollo::findOrFail($id);
        $cholloEliminar -> destroy($id); */
    
        return view('plantilla') -> with('mensaje', 'Nota Eliminada');
      }
}
