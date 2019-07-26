<?php

namespace App\Http\Controllers;

use App\Escola;
use App\User;
use Illuminate\Http\Request;

class EscolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {
        $pesquisa = $request->query('s');

        if(strlen($pesquisa)  > 0 )
        {

            $escolas = Escola::select('*')              
            ->where('username', 'like', '%' . $pesquisa . '%')            
            ->paginate(20);

        }else{
            $escolas = Escola::paginate(20);
        }


        return view('escola.index',compact('escolas'))
            ->with('i', (request()->input('p', 1) - 1) * 20);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('escola.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'link_site' => 'required',
            'username' => 'required|unique:escolas',
            'email' => 'email|required',    
            'google_code' => 'required',
            'rd_code' => 'required',
            'escola' => 'required',
            'estado' => 'required',
            'cidade' => 'required',
            'bairro' => 'required',   
            'facebook_code'=> 'required'
        ]);

        $escola = Escola::create($request->input());


        return redirect()->route('escolas.index')
                        ->with('success','Escola criada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function show(Escola $escola)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function edit(Escola $escola)
    {
        
        return view('escola.edit', compact('escola'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Escola $escola)
    {
        $request->validate([
            'link_site' => 'required',
            'username' => 'required|unique:escolas,id,'.$escola->id,
            'email' => 'email|required',
            'google_code' => 'required',
            'rd_code' => 'required',
            'escola' => 'required',
            'estado' => 'required',
            'cidade' => 'required',
            'bairro' => 'required',   
            'facebook_code'=> 'required'
        ]);
        

        $escola->update($request->input());

        return redirect()->route('escolas.index')
                        ->with('success','Escola editada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escola $escola)
    {
       $escola->delete();

        return redirect()->route('escolas.index')
                        ->with('success','Escola deleteda com Sucesso!');
    }
}
