<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Agoenxz21\Datatables\Datatable;
use App\Models\MitraModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class MitraController extends BaseController
{
    public function index()
    {
        return view('backend/mitra/table',[
            'data_kategori' => (new MitraModel())->findAll()
        ]);
    }

    public function all()
    {
        $pm = new MitraModel();
        $pm->select('id , nama_mitra , alamat , email, nohp , aktif , foto');
        return(new Datatable($pm))
            ->setFieldFilter(['nama_mitra','alamat' , 'email', 'nohp', 'aktif' , 'foto'])
            ->draw();
    }

    public function show($id){
        $r= (new MitraModel())->where('id',$id)->first();
        if($r == null)throw PageNotFoundException::forPageNotFound();

        return $this->response->setJSON($r);
    }

    public function store(){
        $pm = new MitraModel();

        $id = $pm-> insert([
            'nama_mitra' => $this->request->getVar('nama_mitra'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            'nohp' => $this->request->getVar('nohp'),
            'aktif' => $this->request->getVar('aktif'),
            'foto' => $this->request->getVar('foto'),

        ]);
        return $this->response->setJSON(['id'=>$id])
            ->setStatusCode(intval($id) > 0 ? 200 : 406);
    }

    public function update(){
        $pm = new MitraModel();
        $id = (int)$this->request->getvar('id');

        if($pm->find($id) == null)
            throw PageNotFoundException::forPageNotFound();

        $hasil = $pm-> update($id,[
            'nama_mitra' => $this->request->getVar('nama_mitra'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            'nohp' => $this->request->getVar('nohp'),
            'aktif' => $this->request->getVar('aktif'),
            'foto' => $this->request->getVar('foto'),
        ]);
            return $this->response->setJSON(['result'=>$hasil]);
    }

    public function delete(){
        $pm = new MitraModel();
        $id = $this->request->getvar('id');
        $hasil = $pm->delete($id);
        return $this->response->setJSON(['result'=>$hasil]);
    }
}
