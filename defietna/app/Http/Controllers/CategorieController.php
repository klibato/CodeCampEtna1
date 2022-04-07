<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function createtest(Request $request)

    {
        $validate = $request->validate([
            'name' => "min:2|max:255",
        ]);
        if (Categorie::create($validate)) {
            return response()->json([], 201);
        }

        return response()->json([], 400);
    }
}
