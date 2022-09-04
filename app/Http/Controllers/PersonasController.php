<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function index()
    {
        //pagina de inicio
        $datos = Personas::orderBy('nombre', 'desc')->paginate(2);

        return view('inicio', compact('datos'));
    }


    public function create()
    {
        //el formulario donde agregamos datos
        return view('agregar');
    }


    public function store(Request $request)
    {
        //sirve para guardar datos en la base de datos
        $personas = new Personas();
        $personas->nombre = $request->post('nombre');
        $personas->apellidoP = $request->post('apellidoP');
        $personas->apellidoM = $request->post('apellidoM');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');

        $personas->save();

        return redirect()->route("personas.index")->with("success", "Agregado Correctamente");
    }


    public function show($id)
    {
        //obtener un solo registro de nuestra tabla\
        $personas = Personas::find($id);
        return view("eliminar", compact('personas'));

    }


    public function edit($id)
    {
        //este metodo nos sirve para traer los datos que se van a editar y lo coloca en un formulario

        $personas = Personas::find($id);
        return view("actualizar", compact('personas'));


    }


    public function update(Request $request, $id)
    {
        //este metodo actualiza los datos en la base de datos

        $personas = Personas::find($id);
        $personas->nombre = $request->post('nombre');
        $personas->apellidoP = $request->post('apellidoP');
        $personas->apellidoM = $request->post('apellidoM');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("personas.index")->with("success", "Actualizado Correctamente");
    }


    public function destroy($id)
    {
        //elimina una registro 

        $personas = Personas::find($id);
        $personas->delete();

        return redirect()->route("personas.index")->with("success", "Eliminado Correctamente");

    }
}
