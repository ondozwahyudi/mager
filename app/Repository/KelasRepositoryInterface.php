<?php

namespace App\Repository;

interface KelasRepositoryInterface
{
    public function getKelas();
    public function getKode($kode);
    public function show($uuid);
    public function store($attributed);
    public function delete($uuid);
}
