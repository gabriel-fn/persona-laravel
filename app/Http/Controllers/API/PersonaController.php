<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests\SavePersona;
use App\Http\Controllers\Controller;
use App\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = auth()->user()->personas()->orderBy('nome', 'asc')->get();
        return response()->success($personas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SavePersona $request)
    {   
        $persona = auth()->user()->personas()->create($request->except('feitos', 'pericias', 'desvantagens', 'poderes'));
        
        if ($request->has('feitos')) {
            $persona->feitosSync($request->feitos);
        }

        if ($request->has('pericias')) {
            $persona->periciasSync($request->pericias);
        }

        if ($request->has('desvantagens')) {
            $persona->desvantagensSync($request->desvantagens);
        }

        if ($request->has('poderes')) {
            $persona->poderesSync($request->poderes);
        }
        
        return response()->success($persona);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->success(Persona::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SavePersona $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $persona->update($request->except('feitos', 'pericias', 'desvantagens', 'poderes'));

        if ($request->has('feitos')) {
            $persona->feitosSync($request->feitos);
        }

        if ($request->has('pericias')) {
            $persona->periciasSync($request->pericias);
        }

        if ($request->has('desvantagens')) {
            $persona->desvantagensSync($request->desvantagens);
        }

        if ($request->has('poderes')) {
            $persona->poderesSync($request->poderes);
        }

        return response()->success($persona);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $status = $persona->delete();
        return response()->success($status);
    }
}
