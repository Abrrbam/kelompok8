<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PetugasController extends BaseController
{
    // Halaman Dashboard Petugas
    public function index()
    {
        $data = [
            'title' => 'Dashboard Petugas',
            'nav' => ['Profil', 'Dashboard', 'Siswa', 'Penjual']
        ]
        return view('petugas/dashboard');
    }

    // Halaman List Data Siswa
    public function listsiswa()
    {
        $data = [
            'title' => 'Data Siswa',
            'nav' => ['Profil', 'Dashboard', 'Siswa', 'Penjual']
        ]
        return view('petugas/listsiswa');
    }

    // Halaman LIst Data Penjual
    public function listpenjual()
    {
        $data = [
            'title' => 'Data Penjual',
            'nav' => ['Profil', 'Dashboard', 'Siswa', 'Penjual']
        ]
        return view('petugas/listpenjual');
    }

    // Halaman Tambah Isi Saldo
    public function isisaldo()
    {
        $data = [
            'title' => 'Pengisian Saldo',
            'nav' => ['Profil', 'Dashboard', 'Siswa', 'Penjual']
        ]
        return view('petugas/isisaldo');
    }

    // Halaman Detail Pembelian Saldo
    public function detailsaldo()
    {
        $data = [
            'title' => 'Detail Pembelian Saldo',
            'nav' => ['Profil', 'Dashboard', 'Siswa', 'Penjual']
        ]
        return view('petugas/detailsaldo');
    }


    
}
