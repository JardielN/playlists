<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // este metodo mostrara el Dashboard principal
    public function Dashboard()
    {
        return view('dashboard');
    }

    // Este metodo mostrara el estatus de las maquinas
    public function monitorLineas()
    {
        // 'lineas.index' es organizar las vistas en carpetas
        // dentro de la carpeta 'resources/views'
        // la ruta seria:
        // resources/views/lineas/index.blade.php
        return view('lineas.index');
    }

    public function reportarAlerta()
    {
        // la ruta aqui seria:
        // resources/views/alertas/create.blade.php
        return view('alertas.create');
    }
}
