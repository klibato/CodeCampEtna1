<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdmissionsController extends Controller
{
    public function show()
    {
        $users = DB::table('trombi_has_categories')->where('categorie_id', 5)->get();
        $result = [];
        foreach ($users as $user) {
            array_push($result, DB::table('trombis')->where('id', $user->trombi_id)->first());
        }
        return view('serviceadmiss')->with(['users' => $result]);
    }
}
