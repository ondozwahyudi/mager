<?php

namespace App\Http\Controllers;

use App\Repository\RepositoryInterface;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    private $klsRepo;
    public function __construct(RepositoryInterface $klsRepo)
    {
        $this->middleware('auth');
        $this->klsRepo = $klsRepo;
    }

    public function index()
    {
        $kelas = self::guru();
        return view('home', compact('kelas'));
    }
    protected function guru()
    {
        $kelas = $this->klsRepo->getKelas();
        return $kelas;
    }

    public function kode(Request $request)
    {
        $kode = $request->kode;
        $getKode = $this->klsRepo->getKode($kode);
        return $getKode;
    }

    public function show($uuid)
    {
        $kelas = $this->klsRepo->show($uuid);
        return $kelas;
    }

    public function store(request $request)
    {
        $this->klsRepo->store(
            $attributed = [
                'uuid'  => Uuid::uuid4(),
                'nama_kelas' => $request->nama_kelas,
                'mapel' => $request->mapel,
                'ruang' => $request->ruang,
                'kode_kelas' => Str::random(7),
                'user_id' => auth()->user()->id
            ]
        );
        return back()->with('success', 'berhasil ditambahkan!');
    }

    public function delete($uuid)
    {
        $this->klsRepo->delete($uuid);
        return back()->with('succces', 'Data Transaksi telah berhasil dihapus!');
    }

    public function dkSiswa($id, $uuid)
    {
        $kelas = $this->klsRepo->dkSiswa($id, $uuid);
        return $kelas;
    }
}
