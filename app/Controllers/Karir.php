<?php

namespace App\Controllers;

use App\Models\KarirModel;

class Karir extends BaseController
{
    public function __construct()
    {
        $this->KarirModel = new KarirModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Karir | Spairum.com',

        ];
        return view('karir/home', $data);
    }
    public function daftar()
    {
        $email = $this->request->getVar('email');
        $data = [
            'title' => 'jobs | Spairum.com',
            'email' => $email

        ];
        return view('karir/daftar', $data);
    }
    public function save()
    {
        $nama = ucwords($this->request->getVar('nama'));
        $email = $this->request->getVar('email');
        $telp = $this->request->getVar('telp');
        $pendidikan = $this->request->getVar('pendidikan');
        $sekolah = $this->request->getVar('sekolah');
        $jurusan = $this->request->getVar('jurusan');
        $posisi = $this->request->getVar('confim');
        $this->KarirModel->save([
            'nama' => $nama,
            'email' => $email,
            'telp' => $telp,
            'agama' => $this->request->getVar('agama'),
            'tanggal_lahir' => $this->request->getVar('date'),
            'pendidikan' => $pendidikan,
            'sekolah' => $sekolah,
            'jurusan' => $jurusan,
            'masuk' => $this->request->getVar('masuk'),
            'lulus' => $this->request->getVar('lulus'),
            'link' => $this->request->getVar('link'),
            'info' => $this->request->getVar('info'),
            'posisi' => $posisi,
        ]);
        session()->setFlashdata('Berhasil', "Terimakasih $nama telah mendaftar. Nanti kami akan menghubungi.");
        return redirect()->to('/about');
        // return view('karir/daftar', $data);
    }
}
