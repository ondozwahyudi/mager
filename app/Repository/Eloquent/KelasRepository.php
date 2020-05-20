<?php

namespace App\Repository\Eloquent;

use App\DataKelas;
use App\Kelas;
use App\Repository\KelasRepositoryInterface;
use App\User;


class KelasRepository implements KelasRepositoryInterface
{
    private $user;
    private $kls;
    public function __construct(User $user, Kelas $kls)
    {
        $this->user = $user;
        $this->kls = $kls;
    }

    public function getKelas()
    {
        $kelas = $this->user::where('id', auth()
            ->user()
            ->id)
            ->with('dk')
            ->get();
        $format = self::format($kelas);
        return $format;
    }

    protected function format($kelas)
    {
        $map = $kelas->map(function ($value) {
            $arr = [];
            $arr['user_auth'] = $value->name;
            foreach ($value['dk'] as $key => $dk) {
                $arr['kelas'][$key]['uuid'] = $dk->kelas->uuid;
                $arr['kelas'][$key]['nama_kelas'] = $dk->kelas->nama_kelas;
                $arr['kelas'][$key]['mapel'] = $dk->kelas->mapel;
                $arr['kelas'][$key]['nama_guru'] = $dk->kelas->user->name;
                $arr['kelas'][$key]['code'] = $dk->kelas->kode_kelas;
                $arr['kelas'][$key]['jumlah'] = $dk->kelas->dk->where('status', 0)->count();
                $arr['kelas'][$key]['photo'] = $dk->kelas->user->photo;
            }
            return $arr;
        });
        return $map;
    }

    public function getKode($kode)
    {
        $kelas = $this->kls::where('kode_kelas', $kode)->first();
        if (!empty($kelas)) {
            $user =  $this->user::find(auth()->user()->id);
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
        $kelas = $this->kls::where('uuid', $uuid)->with('user')->first();

        return $kelas;
    }

    public function store($attributed)
    {
        $kelas = $this->kls->create($attributed);
        $user =  $this->user::find(auth()->user()->id);
        DataKelas::Create([
            'kelas_id' => $kelas->id,
            'user_id' => $user->id,
            'status' => '1',
        ]);
    }

    public function delete($uuid)
    {
        $kelas = kelas::where('uuid', $uuid)->firstOrfail();
        $kelas->delete();
    }
}
