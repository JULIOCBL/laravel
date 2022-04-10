<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Carrito extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        if (session()->has('carrito')) {
            if (empty(session('carrito'))) {
                $respuesta['status'] = 204;
                $respuesta['msj'] = 'No hay items';
            } else {
                $respuesta['status'] = 200;
                $respuesta['data'] = session('carrito');
            }
        } else {
            $respuesta['status'] = 204;
            $respuesta['msj'] = 'No hay items';
        }
        return response()->json($respuesta);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function agregarCarrito(Request $request)
    {
        //preparacion de datos
        $datos = array(
            'claveProducto' => $request['clave'],
            'precio' => $request['precio'],
            'nombre' => $request['nombre'],
            'imagen' => $request['imagen'],
            'items' => $request['items'],
        );

        //crear datos
        if ($request->session()->has('carrito')) {
            $carrito = session('carrito');

            $existe = false;
            //buscar si existe agregado el producto
            foreach ($carrito as $key => $value) {
                if ($carrito[$key]['claveProducto'] == $request['clave']) {
                    $existe = true;
                }
            }
            //Si no existe el producto en el carrito se agregara
            if ($existe) {
                $respuesta['status'] = 202;
                $respuesta['msg'] = 'Ya existe agregado';
            } else {
                $request->session()->push('carrito', $datos);
                $respuesta['status'] = 200;
                $respuesta['msg'] = 'Se agrego con exito';
            }
        } else {
            session('carrito');
            $request->session()->push('carrito', $datos);
            $respuesta['status'] = 200;
            $respuesta['msg'] = 'Se agrego con exito';
        }

        return response()->json($respuesta);
    }


    public function update(Request $request)
    {
        $carrito = session('carrito');
        $datos = $request['carrito'];
        foreach ($carrito as $key => $value) {
            foreach ($datos as $items => $value_) {
                if ($carrito[$key]['claveProducto'] == $datos[$items]['clave']) {
                    $carrito[$key]['items'] = $datos[$items]['items'];
                }
            }
        }

        session(['carrito' =>  $carrito]);

        $respuesta['status'] = 200;
        $respuesta['msg'] = 'Actualizado';
        return response()->json($respuesta);
    }


    public function destroy(Request $request)
    {

        if ($request['evento'] == 'reiniciar') {
            session(['carrito' =>  []]);
            $respuesta['status'] = 200;
            $respuesta['msg'] = 'Filnalizo con exito';
        } else {
            $carrito = session('carrito');
            unset($carrito[$request['idProducto']]);
            /*   $carrito = array_values($carrito); */
            session(['carrito' =>  $carrito]);
            $respuesta['status'] = 200;
            $respuesta['msg'] = 'Se agrego con exito';
        }

        return response()->json($respuesta);
    }
}
