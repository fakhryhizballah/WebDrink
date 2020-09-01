<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\WebinarModel;

class Blog extends Controller
{
    public function __construct()
    {
        $this->WebinarModel = new WebinarModel();
        $this->email = \Config\Services::email();
    }

    public function index()
    {
        $data = [
            'title' => 'Blog |Spairum.com',

        ];
        return view('blog/head', $data);
    }
    public function webinar()
    {
        $data = [
            'title' => 'Blog |Spairum.com',

        ];
        return view('blog/webinar', $data);
    }
    public function saveWebinar()
    {
        $email = $this->request->getVar('email');
        $nama = $this->request->getVar('nama');
        $this->WebinarModel->save([
            'nama' => $nama,
            'email' => $email,
            'telp' => $this->request->getVar('telp'),
            'ket' => $this->request->getVar('ket'),
        ]);

        $this->email->setFrom('support@apps.spairum.com', 'noreply-spairum');
        $this->email->setTo($email);
        $this->email->setSubject('Terimakasih');
        $this->email->setMessage("<h1>Hallo $nama </h1>
            <p>Terimakasih telah mendaftar Webinar & Product Launching SPAIRUM</p>
		<p>SPAIRUM merupakan salah satu socialenterprice yang berupaya untuk membuat indonesia bebas dari plastik dengan cara menerapkan kebiasaan menggunakan botol kemasan plastik sekali pakai dengan kebiasaan mengisi air ulang di stasiun terdekat, 
        Mari hadiri acara Launching Product Spairum dengan hadir pada :
        Wednesday, 16 september 2020
       <br> 14.00-16.00 WIB
        <br> Live broadcast on
        <br>Facebook, Instagram, and Youtube(@america Channel)
        Pembicara :
        <br> 1. Fahrurrazi, S.E, Direktur CV.Synergy Business Consulting & Manajer Inkubator Bisnis Teknologi UNTAN 
        <br>2. Beny Than Heri, Ketua Akademi Ide Kalimantan
        <br>3.Ranitya Nurlita, Founder WasteHub
        <br>Selanjutnya, untuk keperluan penyampaian informasi YouTube link, kami ingin mengetahui beberapa informasi. Untuk itu dimohohon Sahabat Pesisir untuk mengisi form di bawah ini ya. Terima Kasih. Have a great day, and see you!
        CP: <a href='https://wa.me/+62895373130201/?text=saya%20$nama%20ingin%20bertanya'>0895373130201</a> Naufal </p> ");
        $this->email->send();
        return redirect()->to('/');
    }
}
