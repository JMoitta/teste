<?php

namespace FederalSt\Http\Controllers;

use FederalSt\Car;
use FederalSt\User;
use Illuminate\Http\Request;

class CarController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carros = Car::orderBy('id', 'asc')->get();
        $users = User::all()->toArray();
        return view('carro.index',[
            "carros" => $carros
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Car();
        
        $car->create($request->all());
        // echo '$Car->create($request->all());';
        return redirect()->route('admin.car.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        $users = User::all();
        return view('carro.edit',[
            'car' => $car,
            "users" => $users
        ]);
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
        $idArray = ['id' => $id];
        // var_dump($request->all());exit;
        $user = User::find($request->all()['user_id']);
        $car = Car::updateOrCreate($idArray, $request->all());

        $car->user()->associate($user);
        $car->save();
        return redirect()->route('admin.car.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect()->route('admin.car.index');
    }
}
