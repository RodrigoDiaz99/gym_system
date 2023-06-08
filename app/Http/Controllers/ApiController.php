<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function getProductos()
    {

        $product = Product::join('category_products', 'products.category_products_id', '=', 'category_products.id')
        ->join('inventories','inventories.products_id','=','inventories.id')
        ->where('products.requireInventory', 0)
            ->select('products.id', 'products.bar_code',
                'products.name','inventories.sales_price')
            ->get();
        foreach ($product as $lstProduct) {
            $lista[] = array(
                'iIDProducto' => $lstProduct->id,
                'cNombreProduct' => $lstProduct->name,
                'cCodeBar' => $lstProduct->bar_code,
                'price'=>$lstProduct->sales_price

            );
        }
        $array = response()->json([
            'iError' => 0,
            'lSuccess' => true,
            'data' => $lista,
        ]);
        return $array;
    }
    public function getProductosFull()
    {

        $product = Product::join('category_products', 'products.category_products_id', '=', 'category_products.id')
        ->join('inventories','inventories.products_id','=','inventories.id')
        ->where('products.requireInventory', 0)
            ->select('products.id', 'products.bar_code',
                'products.name','inventories.sales_price')
            ->get();
            dd($product);
        foreach ($product as $lstProduct) {
            $lista[] = array(
                'iIDProducto' => $lstProduct->id,
                'cNombreProduct' => $lstProduct->name,
                'cCodeBar' => $lstProduct->bar_code,
                'precio'

            );
        }
        $array = response()->json([
            'iError' => 0,
            'lSuccess' => true,
            'data' => $lista,
        ]);
        return $array;
    }
    public function postPedido(Request $request){

            // Validar y procesar los datos recibidos en la solicitud
           // Validar y procesar el JSON recibido
    $json = $request->getContent();
    $data = json_decode($json, true);

    // Realizar las acciones necesarias con los datos del pedido

    // Retornar una respuesta apropiada
    return response()->json(['message' => 'JSON received and processed successfully']);

    }
}
