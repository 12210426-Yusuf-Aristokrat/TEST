<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KecamatanModel;
use Agoenxz21\Datatables\Datatable;
use CodeIgniter\Exceptions\PageNotFoundException;

class KecamatanController extends BaseController
{
    public function index()
    {
        return view('backend/kecamatan/table',[
            'data_kategori' => (new KecamatanModel())->findAll()
        ]);
    }

    public function all()
    {
        $pm = new KecamatanModel();
        $pm->select('id , kode , nama');
        return(new Datatable($pm))
            ->setFieldFilter(['kode','nama'])
            ->draw();
    }

    public function show($id){
        $r= (new KecamatanModel())->where('id',$id)->first();
        if($r == null)throw PageNotFoundException::forPageNotFound();

        return $this->response->setJSON($r);
    }

    public function store(){
        $pm = new KecamatanModel();

        $id = $pm-> insert([
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama')
        ]);
        return $this->response->setJSON(['id'=>$id])
            ->setStatusCode(intval($id) > 0 ? 200 : 406);
    }

    public function update(){
        $pm = new KecamatanModel();
        $id = (int)$this->request->getvar('id');

        if($pm->find($id) == null)
            throw PageNotFoundException::forPageNotFound();

        $hasil = $pm-> update($id,[
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama')
        ]);
            return $this->response->setJSON(['result'=>$hasil]);
    }

    public function delete(){
        $pm = new KecamatanModel();
        $id = $this->request->getvar('id');
        $hasil = $pm->delete($id);
        return $this->response->setJSON(['result'=>$hasil]);
    }
}
