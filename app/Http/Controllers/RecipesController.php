<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Recipe;
use Dotenv\Exception\ValidationException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index(){
        $recipes = Recipe::all();

        return view('recipes.index', ['recipes'=>$recipes]);
    }
    public function show(Recipe $recipe){
        return view('recipes.show', ['recipe'=>$recipe]);
    }

    public function store (Request $request){


        try {
            $this->validate($request, [
                'name' => 'required',
                'description' => 'required',
                'products' => ['required', 'array']
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {

            return $e->errors();
        }

        var_dump($request->all());

        $recipe = new Recipe($request->all());
        $recipe->save();

        $recipe->products()->sync($request->get('products'));

        return $recipe;


    }
    public function delete(Recipe $recipe){

$recipe->delete();
    }

    public function view(){

        echo view('delete');
    }
}
