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
        $kelas = User::where('id', auth()->user()->id)->with('dk')->get();
        // return $kelas;
        $map =  $kelas->map(function ($value) {
            $arr = [];
            $arr['user_auth'] = $value->name;
            foreach ($value['dk'] as $key => $dk) {
                $arr['kelas'][$key]['uuid'] = $dk->kelas->uuid;
                $arr['kelas'][$key]['nama_kelas'] = $dk->kelas->nama_kelas;
                $arr['kelas'][$key]['mapel'] = $dk->kelas->mapel;
                $arr['kelas'][$key]['nama_guru'] = $dk->kelas->user->name;
                $arr['kelas'][$key]['code'] = $dk->kelas->dk->where('status', 0)->count();
                // $arr['kelas'][$key]['photo'] = $user->photo;
                // foreach ($dk->kelas->dk as $kis => $user) {
                //     if ($dk->kelas->id != $user->id) {
                //         $data['kelas'][$key]['siswa'][] = $user;
                //         $arr['kelas'][$key]['siswa'] = count($data['kelas'][$key]['siswa']);
                //     } else {
                //     }
                // }
            }
            return $arr;
        });
        return $map;
        // return view('kelas.kls_show');
    }
}
