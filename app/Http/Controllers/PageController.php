<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Testimonio;
use App\Models\Experiencia;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio()
    {
        $proyectos = Proyecto::where('destacado', true)
            ->orderBy('orden', 'asc')
            ->orderBy('id', 'desc')
            ->get();

        $testimonios = Testimonio::where('activo', true)
            ->orderBy('id', 'desc')
            ->get();

        $experiencias = Experiencia::orderBy('orden', 'asc')
            ->orderBy('id', 'desc')
            ->get();

        return view('public.inicio', compact('proyectos', 'testimonios', 'experiencias'));
    }

    public function proyectos()
    {
        $proyectos = Proyecto::orderBy('orden', 'asc')
            ->orderBy('id', 'desc')
            ->get();

        return view('public.proyectos', compact('proyectos'));
    }

    public function contacto()
    {
        return view('public.contacto');
    }

    public function arquitectura()
    {
        return view('public.arquitectura');
    }
}
