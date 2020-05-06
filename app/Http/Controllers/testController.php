<?php

namespace App\Http\Controllers;

use App\DataKelas;
use App\Kelas;
use Illuminate\Http\Request;
use App\User;

class testController extends Controller
{
    public function test()
    {
        // $kelas = kelas::where('kode_kelas', 'BEJ3hph')->first();
        // $user =  User::find(auth()->user()->id);
        // if ($user->kelas()->where('kelas_id', $kelas->id)->exists()) {
        //     echo "data sudah ada";
        // } else {
        //     $user->kelas()->attach($kelas);
        //     echo "berhasil";
        // }
    }
}
