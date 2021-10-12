<?php

namespace App\Controllers;

use App\Models\KarirModel;
use App\Libraries\cookie_options;

class Karir extends BaseController
{
    public function __construct()
    {
        $this->KarirModel = new KarirModel();
        $this->email = \Config\Services::email();
        helper('cookie');
        $this->cookie_options = new cookie_options();
    }
    public function index()
    {
        if (empty($_COOKIE['view-web-sapirum'])) {
            $this->cookie_options->setCookies();
        } else {
            $this->cookie_options->updateCookies();
        }
        $data = [
            'title' => 'Karir | Spairum.com',

        ];
        return view('karir/home', $data);
    }
    public function daftar()
    {
        if (empty($_COOKIE['view-web-sapirum'])) {
            $this->cookie_options->setCookies();
        } else {
            $this->cookie_options->updateCookies();
        }
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
            'bio' => $_SERVER['REMOTE_ADDR'],
        ]);

        $this->email->setFrom('support@spairum.com', 'noreply-Spairum.com');
        $this->email->setTo('falehry88@gmail.com');
        $this->email->setCC('asharidha2014@gmail.com');
        $this->email->setBCC('necrobradley@gmail.com');
        $this->email->setSubject('HRD Spairum');
        $this->email->setMessage("
        <table align='center' cellpadding='0' cellspacing='0' border='0' width='100%' bgcolor='#f0f0f0'>
        <tr>
        <td style='padding: 30px 30px 20px 30px;'>
            <table cellpadding='0' cellspacing='0' border='0' width='100%' bgcolor='#ffffff' style='max-width: 650px; margin: auto;'>
            <tr>
                <td colspan='2' align='center' style='background-color: #0d8eff; padding: 40px;'>
                    <a href='https://spairum.my.id/' target='_blank'><img src='https://spairum.my.id/Asset/img/spairum.png' width='50%' border='0' /></a>
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
                    <br>saya lulusan dari $sekolah, jurusan $jurusan 
                    <br> Alamat: $tahun
                    <br> Email: $email
                    <br> Nomor Whatsapp: <a href='https://wa.me/+62$telp?text=Hai%20saya%20saya%20dari%20Tim%20Spairum'> $telp <strong>($nama)</strong> </a> 
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
                        <a href='https://spairum.my.id/about' target='_blank' style='color: #777; text-decoration: none'>Spairum-Pay</a>
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
        $this->email->setFrom('infospairum@gmail.com', 'Spairum Careers');
        $this->email->setTo($email);
        $this->email->setCC('falehry88@gmail.com');
        $this->email->setBCC('necrobradley@gmail.com');
        $this->email->setSubject('RECRUITMENT MAGANG SPAIRUM');
        $this->email->setMessage("
        <table align='center' cellpadding='0' cellspacing='0' border='0' width='100%' bgcolor='#f0f0f0'>
 <tr>
 <td style='padding: 30px 30px 20px 30px;'>
 <table cellpadding='0' cellspacing='0' border='0' width='100%' bgcolor='#ffffff' style='max-width: 650px; margin: auto;'>
 <tr>
 <td colspan='2' align='center' style='background-color: #0d8eff; padding: 40px;'>
 <a href='https://spairum.my.id/' target='_blank'><img src='https://spairum.my.id/Asset/img/spairum.png' width='50%' border='0' /></a>
 </td>
 </tr>
 <tr>
 <td colspan='2' align='center' style='padding: 50px 50px 0px 50px;'>
 <h1 style='padding-right: 0em; margin: 0; line-height: 40px; font-weight:300; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #666; text-align: left; padding-bottom: 1em;'>
 Magang - Spairum
 </h1>
 </td>
 </tr>
 <tr>
 <td style='text-align: left; padding: 0px 50px;' valign='top'>
 <p style='font-size: 18px; margin: 0; line-height: 24px; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #666; text-align: left; padding-bottom: 3%;'>
 Hi, $nama
 </p>
    <br>
 <p style='font-size: 18px; margin: 0; line-height: 24px; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #666; text-align: left; padding-bottom: 3%;'>
 Terima Kasih telah mendaftar menjadi bagian dari spairum, data diri $nama telah kami terima.
 <br>Tahap Selanjutnya silahkan kirim Curriculum Vitae (CV) terbaik kamu di email ini 
 <br> info.spairum@gmail.com
 <br> 
   <br>Pastikan juga kamu telah mendaftar aplikasi  <a href='https://air.spairum.my.id/daftar'> air.spairum.my.id </a>
    <br>Jangan Lupa follow Instagram <a href='https://www.instagram.com/spairum/'> @spairum</a>  untuk pantau info selanjutnya
 </p>
 </td>
 </tr>
 <tr>
 <td style='text-align: left; padding: 30px 50px 50px 50px' valign='top'>
 <p style='font-size: 18px; margin: 0; line-height: 24px; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #505050; text-align: left;'>
 Thanks,<br/>
 Informasi lebih lanjut bisa hubungi kami
 <a href='https://wa.me/+62895321701798?text=saya%20ingin%20bertanya%20tentang%20karir%20di%20Spairum'> 0895321701798 <strong>(Fakhry Al)</strong></a>
 </p>
 </td>
 </tr>
 <tr>
 <td colspan='2' align='center' style='padding: 20px 40px 40px 40px;' bgcolor='#f0f0f0'>
 <p style='font-size: 12px; margin: 0; line-height: 24px; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #777;'>
 &copy; 2020
 <a href= 'https://spairum.my.id/about' target='_blank' style='color: #777; text-decoration: none'> Spairum.com</a>
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

        session()->setFlashdata('Berhasil', "Terimakasih $nama telah mendaftar. Untuk informasi lebih lajut silahkan cek Email atau di spam email.");
        return redirect()->to('/about');

        // return view('karir/daftar', $data);
    }
    public function reMaill($email)
    {
        // dd($this->Time::now('Asia/Pontianak'));
        // dd($email);
        $this->email->setFrom('infospairum@gmail.com', 'noreply-spairum');
        $this->email->setTo($email);
        $this->email->setSubject('OTP Verification Test');
        $this->email->setMessage(
            "
			<table align='center' cellpadding='0' cellspacing='0' border='0' width='100%' bgcolor='#f0f0f0'>
		    <tr>
		    <td style='padding: 30px 30px 20px 30px;'>
		        <table cellpadding='0' cellspacing='0' border='0' width='100%' bgcolor='#ffffff' style='max-width: 650px; margin: auto;'>
		        <tr>
		            <td colspan='2' align='center' style='background-color: #0d8eff; padding: 40px;'>
		                <a href='http://spairum.my.id/' target='_blank'><img src='https://spairum.my.id/Asset/img/spairum.png' width='50%' border='0' /></a>
		            </td>
		        </tr>
		        <tr>
		            <td colspan='2' align='center' style='padding: 50px 50px 0px 50px;'>
		                <h1 style='padding-right: 0em; margin: 0; line-height: 40px; font-weight:300; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #666; text-align: left; padding-bottom: 1em;'>
		                    Email Spairum ini Untuk mengganti password akun
		                </h1>
		            </td>
		        </tr>
		        <tr>
		            <td style='text-align: left; padding: 0px 50px;' valign='top'>
		                <p style='font-size: 18px; margin: 0; line-height: 24px; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #666; text-align: left; padding-bottom: 3%;'>
		                    Hi nama_depan nama_belakang,
		                </p>
		                <p style='font-size: 18px; margin: 0; line-height: 24px; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #666; text-align: left; padding-bottom: 3%;'>
		                Untuk menganti password baru anda bisa klik tautan pada tautan dibawah :
		                </p>
		                <a href='https://air.spairum.my.id/auth/changepassword/token' style='display:block;width:115px;height:25px;background:#0008ff;padding:10px;text-align:center;border-radius:5px;color:white;font-weight:bold'> Ganti Password sekarang</a>
						<br>
						<p>Atau Gunakan Kode </p>
						<h3>kode</h3>
		                <p style='font-size: 18px; margin: 0; line-height: 24px; font-family: 'Nunito Sans', Arial, Verdana, Helvetica, sans-serif; color: #666; text-align: left; padding-bottom: 3%;'><br/>*Jangan pernah memberitahukan kode tersebut ke orang lain.</p>

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
		                    <a href='https://spairum.my.id/about' target='_blank' style='color: #777; text-decoration: none'>Spairum-Pay</a>
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
		    "
        );

        // d($this->email->send());
        d($this->email->printDebugger(['headers']));
        if ($this->email->send(true)) {
            echo "email_sent";
        } else {
            echo "email_not_sent";
        }
    }
}
