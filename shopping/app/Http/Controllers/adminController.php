<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        return view('admin.accueil');
    }
    public function ajoutCategorie()
    {
        return view('admin.ajoutCategorie');
    }
    public function categories()
    {
        return view('admin.categorie');
    }
}
