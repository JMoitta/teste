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
        $carros = Car::orderBy('id', 'asc')->get();
        return view('carro.index',[
            "carros" => $carros
        ]);
    }

    public function create()
    {
        return view('carro.create');
    }

    public function store(Request $request)
    {
        // var_dump($request->all());exit;
        $id['id'] = $request->all()['id'];
        $Car = new Car();

        $Car->updateOrCreate(
            $id,
            $request->all());
        // echo '$Car->create($request->all());';
        
    }

    public function edit(Request $request, $id)
    {
        $car = Car::find($id);
        // var_dump($car);exit;
        return view('carro.edit', 
            ['car' => $car]);
    }

    public function destroy(Request $request, $id)
    {
        $car = Car::find($id);
        var_dump($car);exit;
        $car->destroy();
        return redirect()->route('admin.carro.index');
    }
}
