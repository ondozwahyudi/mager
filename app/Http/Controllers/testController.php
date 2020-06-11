<?php

namespace App\Http\Controllers;

use App\DataKelas;
use App\Kelas;
use Illuminate\Http\Request;
use App\User;

class testController extends Controller
{
    public function test(request $request)
    {

      $data =  $request->uuid;
            // $data = Questions::where('uuid', $request->uuid)->first();
            return response()->json($data);

    }
}
