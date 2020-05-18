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
                $arr['kelas'][$key]['code'] = $dk->kelas->kode_kelas;
                $arr['kelas'][$key]['jumlah'] = $dk->kelas->dk->count();
                $arr['kelas'][$key]['photo'] = $dk->kelas->user->photo;
            }
            return $arr;
        });
        return $map;
        // return $kelas;
    }

    public function kode(Request $request)
    {
        $kode = $request->kode;
        $kelas = kelas::where('kode_kelas', $kode)->first();
        if (!empty($kelas)) {
            $user =  User::find(auth()->user()->id);
            if ($user->kelas()->where('kelas_id', $kelas->id)->exists()) {
                return back()->with('error', 'Task Created Successfully!');
            } else {
                $user->kelas()->attach($kelas);
                return back()->with('success', 'Kelas telah berhasil ditambahkan!');
            }
        } else {
            return back()->with('info', 'Kode Kelas Tidak di Temikan!');
        }
    }

    public function show($uuid)
    {
        $kelas = Kelas::where('uuid', $uuid)->with('user')->first();

        return view('kelas.kls_show', compact('kelas'));
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

    public function delete($uuid)
    {
        $kelas = kelas::where('uuid', $uuid)->firstOrfail();
        $kelas->delete();

        return back()->with('succces', 'Data Transaksi telah berhasil dihapus!');
    }
}
