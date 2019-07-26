<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escola;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function indexPage($account){

        $escola = Escola::where('username','=',$account)->get();

        if($escola->count() == 1){
            echo '<center>
                <br /><h2>'.$account.'.jumpercursos.com.br</h2><br /><br /><br /><br />
                <img src="imagem.png" style="margin:auto;"/>
              </center>';

        }else{
            return Redirect::to('https://jumpercursos.com.br');
        }

    }
}
