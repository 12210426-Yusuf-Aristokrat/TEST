<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriProdukModel;
use Agoenxz21\Datatables\Datatable;
use CodeIgniter\Exceptions\PageNotFoundException;

class KategoriProdukController extends BaseController
{
    public function index()
    {
        return view('backend/kategoriproduk/table',[
            'data_kategori' => (new KategoriProdukModel())->findAll()
        ]);
    }

    public function all()
    {
        $pm = new KategoriProdukModel();
        $pm->select('id , kategori , aktif');
        return(new Datatable($pm))
            ->setFieldFilter(['kategori','aktif'])
            ->draw();
    }

    public function show($id){
        $r= (new KategoriProdukModel())->where('id',$id)->first();
        if($r == null)throw PageNotFoundException::forPageNotFound();

        return $this->response->setJSON($r);
    }

    public function store(){
        $pm = new KategoriProdukModel();

        $id = $pm-> insert([
            'kategori' => $this->request->getVar('kategori'),
            'aktif' => $this->request->getVar('aktif')
        ]);
        return $this->response->setJSON(['id'=>$id])
            ->setStatusCode(intval($id) > 0 ? 200 : 406);
    }

    public function update(){
        $pm = new KategoriProdukModel();
        $id = (int)$this->request->getvar('id');

        if($pm->find($id) == null)
            throw PageNotFoundException::forPageNotFound();

        $hasil = $pm-> update($id,[
            'kategori' => $this->request->getVar('kategori'),
            'aktif' => $this->request->getVar('aktif')
        ]);
            return $this->response->setJSON(['result'=>$hasil]);
    }

    public function delete(){
        $pm = new KategoriProdukModel();
        $id = $this->request->getvar('id');
        $hasil = $pm->delete($id);
        return $this->response->setJSON(['result'=>$hasil]);
    }
}
