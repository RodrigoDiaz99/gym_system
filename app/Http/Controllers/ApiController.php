<?php

namespace App\Http\Controllers;

use App\Models\Product;

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
}
