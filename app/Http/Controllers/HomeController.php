<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;
use App\User;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kelas = self::guru();
        // return $kelas;
        return view('home', compact('kelas'));
    }

    protected function guru()
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
                $arr['kelas'][$key]['code'] = $kelas->kode_kelas;
                foreach ($kelas->user as $kis => $user) {
                    if ($kelas->created_by != $user->name) {
                        $data['kelas'][$key]['siswa'][] = $user;
                        $arr['kelas'][$key]['siswa'] = count($data['kelas'][$key]['siswa']);
                    } else {
                        $arr['kelas'][$key]['photo'] = $user->photo;
                    }
                }
            }
            return $arr;
        });
        return $map;

        // return $kelas;
    }

    public function show($uuid)
    {
        $kelas = User::where('id', auth()->user()->id)->with(['kelas' => function ($query) use ($uuid) {
            return $query->where('uuid', $uuid)->with('user')->get();
        }])->get();
        return $kelas[0]->kelas;
    }

    public function store(request $request)
    {
        $kelas = Kelas::create([
            'uuid'  => Uuid::uuid4(),
            'nama_kelas' => $request->nama_kelas,
            'mapel' => $request->mapel,
            'ruang' => $request->ruang,
            'kode_kelas' => Str::random(7),
            'created_by' => auth()->user()->name
        ]);
        $user =  User::find(auth()->user()->id);
        $user->kelas()->attach($kelas->id);

        // return $arr;
        return back()->with('success', 'berhasil ditambahkan!');
    }
}
