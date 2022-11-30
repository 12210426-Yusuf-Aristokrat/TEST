<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Agoenxz21\Datatables\Datatable;
use App\Models\ProdukModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class ProdukController extends BaseController
{
    public function index()
    {
        return view('backend/produk/table',[
            'data_kategori' => (new ProdukModel())->findAll()
        ]);
    }

    public function all()
    {
        $pm = new ProdukModel();
        $pm->select('id , detail_produk , rating , aktif');
        return(new Datatable($pm))
            ->setFieldFilter(['detail_produk','rating' , 'aktif'])
            ->draw();
    }

    public function show($id){
        $r= (new ProdukModel())->where('id',$id)->first();
        if($r == null)throw PageNotFoundException::forPageNotFound();

        return $this->response->setJSON($r);
    }

    public function store(){
        $pm = new ProdukModel();

        $id = $pm-> insert([
            'detail_produk' => $this->request->getVar('detail_produk'),
            'rating' => $this->request->getVar('rating'),
            'aktif' => $this->request->getVar('aktif'),

        ]);
        return $this->response->setJSON(['id'=>$id])
            ->setStatusCode(intval($id) > 0 ? 200 : 406);
    }

    public function update(){
        $pm = new ProdukModel();
        $id = (int)$this->request->getvar('id');

        if($pm->find($id) == null)
            throw PageNotFoundException::forPageNotFound();

        $hasil = $pm-> update($id,[
            'detail_produk' => $this->request->getVar('detail_produk'),
            'rating' => $this->request->getVar('rating'),
            'aktif' => $this->request->getVar('aktif'),
        ]);
            return $this->response->setJSON(['result'=>$hasil]);
    }

    public function delete(){
        $pm = new ProdukModel();
        $id = $this->request->getvar('id');
        $hasil = $pm->delete($id);
        return $this->response->setJSON(['result'=>$hasil]);
    }
}
