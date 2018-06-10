<?php

namespace FederalSt\Http\Controllers;

use FederalSt\Car;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carros = Car::all();
        return view('carro.index',[
            "carros" => $carros
        ]);
    }

    public function create()
    {
        return view('carro.create');
    }

    public function store()
    {
        $Car = new Car();
        $Car->create($request->all());

        return redirect()->route('admin.carro.index');
    }
}
