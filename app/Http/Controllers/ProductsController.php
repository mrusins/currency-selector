<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function store (Request $request){


        try {
            $this->validate($request, [
                'name' => 'required',
                'description' => 'required'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {

            return 'aaa';
        }

        $product = new Product($request->all());
        $product->save();

        return $product;


    }

    public function delete(Product $product){
       var_dump($product->delete());

    }

}
