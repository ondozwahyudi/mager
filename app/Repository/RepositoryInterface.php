<?php

namespace App\Repository;

interface RepositoryInterface
{
    public function getKelas();
    public function getKode($kode);
    public function show($uuid);
    public function store($attributed);
    public function delete($uuid);

    public function dkSiswa($id, $uuid);
}
