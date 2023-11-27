<?php

namespace App\Controllers;
class Paises extends BaseController{
    public function index():String{
    return view('welcome_message');
    }

    public function pais():String{

        $datos['seleccionado']='pais';
        return view('templates/head',$datos).
            view('templates/menu_lateral').
            view('content/pais');
            view('templates/footer');
    }

    public function Peru(){
        $datos['seleccionado']='peru';
        return view('templates/head',$datos).
            view('templates/menu_lateral').
            view('content/peru');
            view('templates/footer');
            
    }

    public function Argentina(){
        $datos['seleccionado']='argentina';
        return view('templates/head',$datos).
            view('templates/menu_lateral').
            view('content/argentina');
            view('templates/footer');
            
    }

    public function Chile(){
        $datos['seleccionado']='chile';
        return view('templates/head',$datos).
            view('templates/menu_lateral').
            view('content/chile');
            view('templates/footer');
            
    }

    public function Brasil(){
        $datos['seleccionado']='brasil';
        return view('templates/head',$datos).
            view('templates/menu_lateral').
            view('content/brasil');
            view('templates/footer');
            
    }
}

// http://localhost/DWES/paises/paises_prueba/public/paises/paises
