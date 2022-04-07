<?php

namespace App\Http\Controllers;

use App\Models\Trombi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class TrombiController extends Controller
{
    public function show()
    {
        return view('trombi');
    }
    public function add(Request $request)
    {
        $validate = $request->validate([
            'name' => "required",
            'phone' => "required",
            "email" => "required"
        ]);
        $user = Trombi::create($validate);
        $user->categories()->attach($request->job, [
            'categorie_id' => $request->job
        ]);
        return view('/trombi');
    }

    function destroy($id)
    {
        $user = Trombi::find($id);
        $user->delete();
        return redirect('/trombi');
    }
}
