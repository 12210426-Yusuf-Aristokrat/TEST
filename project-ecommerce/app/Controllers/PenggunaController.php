<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Email\Email;
use CodeIgniter\HTTP\Message;

class PenggunaController extends BaseController
{
    public function login()
    {
        // mengambil email dan password pengguna
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('sandi');

        $pengguna = (new PenggunaModel())->where('email',$email)->first();

        if($pengguna == null) {
            return $this->response->setJSON(['message->'=>'email tidak terdaftar'])->setStatusCode(403);
        }
        
        //cek password
        $cekPassword = password_verify($password,$pengguna['sandi']);
        if($cekPassword == false){
            return $this->response->setJSON(['message->'=>'email atau sandi tidak cocok'])->setStatusCode(403);
        }

        $this->Session->set('pengguna', $pengguna);
        return $this->response->setJSON(['message->'=>"Selamat Datang {$pengguna['nama']}"])->setStatusCode(200);
    }

    public function viewLogin(){
        return view('login');
    }

    public function lupaPassword(){
        $email = $this->request->getPost('email');
        
        $pengguna = (new PenggunaModel())->where('email',$email)->first();

        if($pengguna == null) {
            return $this->response->setJSON(['message->'=>'email tidak terdaftar'])->setStatusCode(403);
        }
        $sandibaru=substr(md5(date('Y-m-dH:i:s')),5,5);
        $pengguna['sandi'] = password_hash($sandibaru,PASSWORD_BCRYPT);
        $r =(new PenggunaModel())->update($pengguna['id'],$pengguna);

        if($r == false){
            return $this->response->setJSON(['Message'=>"Gagal Merubah Sandi"])->setStatusCode(502);
        }

        $email = new Email(new ConfigEmail());
        $email->setFrom('ecommercebot32@gmail.com', 'Sistem Informasi Ecommerce');
        $email->setTo($pengguna['email']);
        $email->setSubject("Reset Sandi Pengguna");
        $email->setMessage("Hallo {$pengguna['nama']} telah meminta reset sandi. Sandi Baru kamu adalah <b>$sandibaru</b>");
        $r = $email->send();

        //logic
        if($r == true){
            return $this->response->setJSON(['Message'=>"Sandi baru sudah di kirim ke alamat email $email"])->setStatusCode(200);
        }else{
            return $this->response->setJSON(['Message'=>"maaf ada kesalahan pengiriman ke alamat email $email"])->setStatusCode(500);
        }
    }
}
