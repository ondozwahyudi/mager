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
        $kelas = User::where('id', auth()->user()->id)->with(['kelas' => function ($query) {
            return $query->with('user')->get();
        }])->get();
        $map =  $kelas->map(function ($value) {
            $arr = [];
            $arr['user_auth'] = $value->name;
            foreach ($value['kelas'] as $key => $kelas) {
                $arr['kelas'][$key]['uuid'] = $kelas->uuid;
                $arr['kelas'][$key]['nama_kelas'] = $kelas->nama_kelas;
                $arr['kelas'][$key]['mapel'] = $kelas->mapel;
                $arr['kelas'][$key]['nama_guru'] = $kelas->created_by;
                foreach ($kelas->user as $kis => $user) {
                    if ($kelas->created_by != $user->name) {
                        $data['kelas'][$key]['siswa'][] = $user;
                        $arr['kelas'][$key]['siswa'] = count($data['kelas'][$key]['siswa']);
                    }
                }
            }
            return $arr;
        });
        return $map;

        // return $kelas;
    }
}
