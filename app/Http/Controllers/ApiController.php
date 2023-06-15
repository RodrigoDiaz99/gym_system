<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ApiController extends Controller
{

    public function getProductos()
    {

        $product = Product::join('category_products', 'products.category_products_id', '=', 'category_products.id')
            ->where('products.requireInventory', 0)
            ->select('products.id', 'products.bar_code',
                'products.name')
            ->get();
        foreach ($product as $lstProduct) {
            $lista[] = array(
                'iIDProducto' => $lstProduct->id,
                'cNombreProduct' => $lstProduct->name,
                'cCodeBar' => $lstProduct->bar_code,

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
