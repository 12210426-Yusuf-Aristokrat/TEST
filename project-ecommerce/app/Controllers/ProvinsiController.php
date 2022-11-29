<?php

namespace App\Controllers;
use App\Models\ProvinsiModel;
use App\Controllers\BaseController;
use Agoenxz21\Datatables\Datatable;
use CodeIgniter\Exceptions\PageNotFoundException;

class ProvinsiController extends BaseController
{
    public function index()
    {
        return view('backend/provinsi/table',[
            'data_kategori' => (new ProvinsiModel())->findAll()
        ]);
    }
    public function all()
    {
        $pm = new ProvinsiModel();
        $pm->select('id , kode , nama');
        return(new Datatable($pm))
            ->setFieldFilter(['kode','nama'])
            ->draw();
    }
    public function show($id){
        $r= (new ProvinsiModel())->where('id',$id)->first();
        if($r == null)throw PageNotFoundException::forPageNotFound();

        return $this->response->setJSON($r);
    }

    public function store(){
        $pm = new ProvinsiModel();

        $id = $pm-> insert([
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama')
        ]);
        return $this->response->setJSON(['id'=>$id])
            ->setStatusCode(intval($id) > 0 ? 200 : 406);
    }

    public function update(){
        $pm = new ProvinsiModel();
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
        $pm = new ProvinsiModel();
        $id = $this->request->getvar('id');
        $hasil = $pm->delete($id);
        return $this->response->setJSON(['result'=>$hasil]);
    }
}
