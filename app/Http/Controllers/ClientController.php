<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Country;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $buscar = $request->get('buscar');
        $paises['countries']=Country::all();
        $datos['clients']=Client::where('name','like',"%$buscar%")->paginate(2);
        return view('clientes.index',$datos,$paises);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $countries = Country::all();
        return view('clientes.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosCliente = request()->all();

    $campos=[
            'name'=>'required|string|max:100',
            'phone'=>'required|string|max:20',
            'country'=>'required|string',
            'email'=>'required|email'
        ];

        $mensaje = [
            'name.required'=>'The name is required',
            'phone.required'=>'The phone is required',
            'country.required'=>'The country is required',
            'email.required'=>'The email is required'  
        ];

        $this->validate($request, $campos, $mensaje);

        $datosCliente = request()->except('_token');
        Client::insert($datosCliente);
       
        return response()->json($datosCliente);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
