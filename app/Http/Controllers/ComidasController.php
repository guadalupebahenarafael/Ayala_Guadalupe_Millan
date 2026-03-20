<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comidas;

class ComidasController extends Controller
{
    /**
     *Mostrar una lista de las comidas
     */
    public function index()
    {
        //Obtner todos los registros de comida
        $comidas = Comidas::all();
        //Se manda la variable de los registros a la vista
        return view('comidas.index', compact('comidas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comidas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Comidas::create([
            //<NombreFormulario> => request-><NombreDB>
            'Nombre' => $request->Nombre,
            'Disponibilidad' => $request->Disponibilidad,
            'Precio' => $request->Precio,
            'Descripcion' => $request->Descripcion,
            'Tipo_de_comida' => $request->Tipo_de_comida,
            'Categoria' => $request->Categoria,
            'Stock' => $request->Stock
        ]);
        //Redirecciona a una ruta especifica
        return redirect()->route('comidas.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('comidas.edit', compact('comidas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Se hace una validacion de listado de campos
        $request->validate([
            'Nombre' => 'required',
            'Disponibilidad' => 'required',
            'Precio' => 'required',
            'Descripcion' => 'required',
            'Tipo de comida' => 'required',
            'Categoria' => 'required',
            'Stock' => 'required'
        ]);

        //Se realiza la actualizacion del registro
        $comida->update($request->all());

        //Se retorna la actualizacion al index
        return redirect()->route('comidas.index')
            ->with('success', 'Comida actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Se usa la funcion delete() para borrar el registro
        $comida->delete();

        return redirect()->route('comidas.index')
            ->with('success', 'Comida eliminada correctamente');
    }

    public function logout(Request $request){
        //Cierre de la sesion 
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/acceso');
    }
}
