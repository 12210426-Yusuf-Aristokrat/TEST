<?php

namespace App\Controllers;

use Agoenxz21\Datatables\Datatable;
use App\Controllers\BaseController;
use App\Models\PelangganModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class PelangganController extends BaseController
{
    public function index()
    {
        return view('backend/pelanggan/table',[
            'data_kategori' => (new PelangganModel())->findAll()
        ]);
    }

    public function all()
    {
        $pm = new PelangganModel();
        $pm->select('id , nama_depan,nama_belakang ,email , gender');
        return(new Datatable($pm))
            ->setFieldFilter(['nama_depan','nama_belakang','email','gender'])
            ->draw();
    }

    public function show($id){
        $r= (new PelangganModel())->where('id',$id)->first();
        if($r == null)throw PageNotFoundException::forPageNotFound();

        return $this->response->setJSON($r);
    }

    public function store(){
        $pm = new PelangganModel();
        $sandi = $this->request->getvar('sandi');

        $id = $pm-> insert([
            'nama_depan' => $this->request->getVar('nama_depan'),
            'nama_belakang' => $this->request->getVar('nama_belakang'),
            'gender' => $this->request->getVar('gender'),
            'email' => $this->request->getVar('email'),
            'sandi'=>password_hash($sandi, PASSWORD_BCRYPT),
        ]);
        return $this->response->setJSON(['id'=>$id])
            ->setStatusCode(intval($id) > 0 ? 200 : 406);
    }

    public function update(){
        $pm = new PelangganModel();
        $id = (int)$this->request->getvar('id');

        if($pm->find($id) == null)
            throw PageNotFoundException::forPageNotFound();

        $hasil = $pm-> update($id,[
            'nama_depan' => $this->request->getVar('nama_depan'),
            'nama_belakang' => $this->request->getVar('nama_belakang'),
            'gender' => $this->request->getVar('gender'),
            'email' => $this->request->getVar('email'),
        ]);
            return $this->response->setJSON(['result'=>$hasil]);
    }

    public function delete(){
        $pm = new PelangganModel();
        $id = $this->request->getvar('id');
        $hasil = $pm->delete($id);
        return $this->response->setJSON(['result'=>$hasil]);
    }
}
