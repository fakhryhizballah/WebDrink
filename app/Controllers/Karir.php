<?php

namespace App\Controllers;

use App\Models\KarirModel;

class Karir extends BaseController
{
    public function __construct()
    {
        $this->KarirModel = new KarirModel();
        $this->email = \Config\Services::email();
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
        return view('karir/Daftar', $data);
    }
    public function save()
    {
        $nama = ucwords($this->request->getVar('nama'));
        $email = $this->request->getVar('email');
        $telp = $this->request->getVar('telp');
        $pendidikan = $this->request->getVar('pendidikan');
        $sekolah = $this->request->getVar('sekolah');
        $jurusan = $this->request->getVar('jurusan');
        $tahun = $this->request->getVar('lulus');
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
            'lulus' => $tahun,
            'link' => $this->request->getVar('link'),
            'info' => $this->request->getVar('info'),
            'posisi' => $posisi,
        ]);

        $this->email->setFrom('support@spairum.com', 'noreply-rekrutmen spairum');
        $this->email->setTo('falehry88@gmail.com');
        $email->setCC('necrobradley@gmail.com', 'asharidha2014@gmail.com', 'fakhryhiz@student.untan.ac.id');
        $this->email->setMessage("
        <table align='center' cellpadding='0' cellspacing='0' border='0' width='100%' bgcolor='#f0f0f0'>
        <tr>
        <td style='padding: 30px 30px 20px 30px;'>
            <table cellpadding='0' cellspacing='0' border='0' width='100%' bgcolor='#ffffff' style='max-width: 650px; margin: auto;'>
            <tr>
                <td colspan='2' align='center' style='background-color: #0d8eff; padding: 40px;'>
                    <a href='http://spairum.com/' target='_blank'><img src='https://spairum.com/Asset/img/spairum.png' width='50%' border='0' /></a>
                </td>
            </tr>
            <tr>
                <td colspan='2' align='center' style='padding: 50px 50px 0px 50px;'>
                    <h1 style='padding-right: 0em; margin: 0; line-height: 40px; font-weight:300; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #666; text-align: left; padding-bottom: 1em;'>
                        Application letter - Spairum 
                    </h1>
                </td>
            </tr>
            <tr>
                <td style='text-align: left; padding: 0px 50px;' valign='top'>
                    <p style='font-size: 18px; margin: 0; line-height: 24px; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #666; text-align: left; padding-bottom: 3%;'>
                        Hi, Ini pesan Otomatis
                    </p>
                    <p style='font-size: 18px; margin: 0; line-height: 24px; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #666; text-align: left; padding-bottom: 3%;'>
                    Perkenalkan nama saya $nama
                    <br>saya lulusan dari $sekolah, jurusan $jurusan lulus tahun $tahun
                    <br> Email: $Email
                    <br> Nomor Whatsapp: $telp
                    <br>
                    <br> saya ingin melamar di posisi $posisi
                    </p>
                    
                </td>
            </tr>
            <tr>
                <td style='text-align: left; padding: 30px 50px 50px 50px' valign='top'>
                    <p style='font-size: 18px; margin: 0; line-height: 24px; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #505050; text-align: left;'>
                        Thanks,<br/>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan='2' align='center' style='padding: 20px 40px 40px 40px;' bgcolor='#f0f0f0'>
                    <p style='font-size: 12px; margin: 0; line-height: 24px; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #777;'>
                        &copy; 2020
                        <a href='https://spairum.com/about' target='_blank' style='color: #777; text-decoration: none'>Spairum-Pay</a>
                        <br>
                        Jl.Merdeka, Pontianak - Kalimantan Barat
                        <br>
                        Indonesia
                    </p>
                </td>
            </tr>
            </table>
        </td>
        </tr>
        </table>
        ");
        $this->email->send();
        $this->email->setFrom('support@spairum.com', 'noreply-rekrutmen spairum');
        $this->email->setTo($email);
        $email->setCC('necrobradley@gmail.com', 'asharidha2014@gmail.com', 'fakhryhiz@student.untan.ac.id');
        $this->email->setMessage("
        <table align='center' cellpadding='0' cellspacing='0' border='0' width='100%' bgcolor='#f0f0f0'>
            <tr>
            <td style='padding: 30px 30px 20px 30px;'>
                <table cellpadding='0' cellspacing='0' border='0' width='100%' bgcolor='#ffffff' style='max-width: 650px; margin: auto;'>
                <tr>
                    <td colspan='2' align='center' style='background-color: #0d8eff; padding: 40px;'>
                        <a href='http://spairum.com/' target='_blank'><img src='https://spairum.com/Asset/img/spairum.png' width='50%' border='0' /></a>
                    </td>
                </tr>
                <tr>
                    <td colspan='2' align='center' style='padding: 50px 50px 0px 50px;'>
                        <h1 style='padding-right: 0em; margin: 0; line-height: 40px; font-weight:300; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #666; text-align: left; padding-bottom: 1em;'>
                            Career - Spairum 
                        </h1>
                    </td>
                </tr>
                <tr>
                    <td style='text-align: left; padding: 0px 50px;' valign='top'>
                        <p style='font-size: 18px; margin: 0; line-height: 24px; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #666; text-align: left; padding-bottom: 3%;'>
                            Hi, $nama
                        </p>
                        <p style='font-size: 18px; margin: 0; line-height: 24px; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #666; text-align: left; padding-bottom: 3%;'>
                        Terima Kasih telah mendaftar, data diri $nama telah kami terima.
                        <br>saya lulusan dari $sekolah, jurusan $jurusan lulus tahun $tahun
                        <br> 
                        <br> Dalam waktu dekat kami akan mengubungi $nama
                        <br>
                        </p>
                        
                    </td>
                </tr>
                <tr>
                    <td style='text-align: left; padding: 30px 50px 50px 50px' valign='top'>
                        <p style='font-size: 18px; margin: 0; line-height: 24px; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #505050; text-align: left;'>
                            Thanks,<br/>
                            Informasi lebih lanjut bisa hubungi kami 
                            <a href='https://wa.me/+62895373130201?text=saya%20ingin%20bertanya%20tentang%20karir%20di%20Spairum'> 0895321701798 <strong>(Naufal)</strong> </a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan='2' align='center' style='padding: 20px 40px 40px 40px;' bgcolor='#f0f0f0'>
                        <p style='font-size: 12px; margin: 0; line-height: 24px; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #777;'>
                            &copy; 2020
                            <a href= 'https://spairum.com/about' target='_blank' style='color: #777; text-decoration: none'> Spairum-Pay</a>
                            <br>
                            Jl.Merdeka, Pontianak - Kalimantan Barat
                            <br>
                            Indonesia
                        </p>
                    </td>
                </tr>
                </table>
            </td>
            </tr>
            </table>
            ");
        $this->email->send();

        session()->setFlashdata('Berhasil', "Terimakasih $nama telah mendaftar. Untuk informasi lebih lajut silahkan cek Email.");
        return redirect()->to('/about');

        // return view('karir/daftar', $data);
    }
}
