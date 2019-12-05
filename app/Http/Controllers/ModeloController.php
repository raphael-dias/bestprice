<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB; //para o banco
use App\Models\Price;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $modelos = Price::all();
        //  echo $modelos;   
        // traz em formato de objeto 

        return view('modelos.index')->with(['prices'=>$modelos]);

        //pega o retorno $modelos ( todos os objetos e opera em cima deles o 'prices' 
        //di index.blade que é formado por nome e price)

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modelos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Price::create($request ->all());
        return redirect()->route('modelos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nome)
    {
        
        $string = $nome;
        $nome = ($string[0].$string[1].$string[2]); //as 3 primeiras letras da string
        $price = Price::where('nome','like', '%'.$nome.'%')->get();
        return view('modelos.show')->with(['prices'=>$price]);
        
       
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $price = Price::find($id);
        return view('modelos.edit')->with(['prices'=>$price]);
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
        $price = Price::find($id)->update($request ->all());
        return redirect()->route('modelos.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $price = Price::find($id)->delete();
        return redirect()->route('modelos.index');

    }
}
