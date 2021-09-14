<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\WebinarModel;
use App\Models\BlogModel;
use App\Libraries\cookie_options;

class Blog extends BaseController
{
    public function __construct()
    {
        $this->WebinarModel = new WebinarModel();
        $this->email = \Config\Services::email();
        $this->BlogModel = new BlogModel();
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
        // $blog = $this->BlogModel->findAll();
        $blog = $this->BlogModel->getBlog();
        // $blog = $this->BlogModel->orderBy('created_at', 'DESC');
        // dd($blog);
        $data = [
            'title' => 'Blog |Spairum.com',
            'blog' => $blog

        ];


        return view('blog/blog', $data);
    }

    public function detail($slug)
    {
        if (empty($_COOKIE['view-web-sapirum'])) {
            $this->cookie_options->setCookies();
        } else {
            $this->cookie_options->updateCookies();
        }
        $blog = $this->BlogModel->getBlog($slug);
        // dd($blog);

        $data = [
            'title' => 'Blog |Spairum.com',
            'blog' => $blog

        ];
        return view('blog/detail', $data);
    }
    public function webinar()
    {
        if (empty($_COOKIE['view-web-sapirum'])) {
            $this->cookie_options->setCookies();
        } else {
            $this->cookie_options->updateCookies();
        }
        $data = [
            'title' => 'Launching |Spairum.com',

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
            'instansi' => $this->request->getVar('instansi'),
            'confim' => $this->request->getVar('confim'),
        ]);

        $this->email->setFrom('support@apps.spairum.com', 'noreply-spairum');
        $this->email->setTo($email);
        $this->email->setSubject('Terimakasih');
        $this->email->setMessage("<h1>Hallo $nama </h1>
            <h2>Terimakasih telah mendaftar Webinar Launching SPAIRUM</h2>
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
        <br>Terima Kasih. Have a great day, and see you!
        <br>Link untuk siaran launcing spairum akan kami kirimkan melalui Whataap dan Email yang telah $nama submit
        CP: <a href='https://wa.me/+62895373130201/?text=saya%20$nama%20ingin%20bertanya'>0895373130201</a> Naufal </p> ");
        $this->email->send();
        session()->setFlashdata('flash', 'Registration success.');
        return redirect()->to('/about');
    }
}
