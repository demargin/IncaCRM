<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        /** 
         * Con esto aseguramos que cualquier método en este controlador requerirá 
         * que el usuario esté autenticado para acceder a él.
        */
        $this->middleware('auth');
    }

    // Resto de las funciones del controlador van aquí
}
