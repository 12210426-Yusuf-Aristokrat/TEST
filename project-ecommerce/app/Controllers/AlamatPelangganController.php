<?php

namespace App\Controllers;
use Agoenxz21\Datatables\Datatable;
use App\Controllers\BaseController;
use App\Models\AlamatPelangganModel;
use CodeIgniter\Exceptions\PageNotFoundException;


class AlamatPelangganController extends BaseController
{
    public function index()
    {
        return view('backend/alamatpelanggan/table',[
            'data_kategori' => (new AlamatPelangganModel())->findAll()
        ]);
    }

    public function all()
    {
        $pm = new AlamatPelangganModel();
        $pm->select('id , judul , alamat , kodepos');
        return(new Datatable($pm))
            ->setFieldFilter(['judul','alamat','kodepos'])
            ->draw();
    }

    public function show($id){
        $r= (new AlamatPelangganModel())->where('id',$id)->first();
        if($r == null)throw PageNotFoundException::forPageNotFound();

        return $this->response->setJSON($r);
    }

    public function store(){
        $pm = new AlamatPelangganModel();

        $id = $pm-> insert([
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama')
        ]);
        return $this->response->setJSON(['id'=>$id])
            ->setStatusCode(intval($id) > 0 ? 200 : 406);
    }

    public function update(){
        $pm = new AlamatPelangganModel();
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
        $pm = new AlamatPelangganModel();
        $id = $this->request->getvar('id');
        $hasil = $pm->delete($id);
        return $this->response->setJSON(['result'=>$hasil]);
    }
}
