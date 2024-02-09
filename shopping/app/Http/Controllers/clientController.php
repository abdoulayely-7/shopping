<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client.home');
    }
//{{---------------------------------Page shop ---------------------------}}
public  function acheter()

{
    return view('client.acheter');
}

//{{--------------------------------Page Panier----------------------------}}
public  function panier()
{
        return view('client.panier');
}

//{{------------------------------------------Page de paiement----------------}}
public function paiement()
{
    return view('client.paiement');
}
//{{----------------------------page de conexion----------------}}
public function seConnecter()
{
    return view('client.seConnecter');
}

//{{----------------------------page de creation de compte----------------}}
    public function creerCompte()
    {
        return view('client.creerCompte');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
